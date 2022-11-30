<?php

if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Localization\Loc;

Loader::includeModule('iblock');


class Feedback extends \CBitrixComponent implements Controllerable
{
    public $errors = [];

    public function onIncludeComponentLang(): void
    {
        parent::onIncludeComponentLang();
        $this->includeComponentLang(basename(__FILE__));
    }

    /**
     * @return array
     */
    public function configureActions(): array
    {
        return [
            'send' => [
                'prefilters' => [],
            ],
        ];
    }

    /**
     * @return array
     */
    protected function listKeysSignedParameters(): array
    {
        return [
            'EVENT_MESSAGE_ID',
            'IBLOCK_ADD',
            'IBLOCK_ID',
            'USE_CAPTCHA',
            'OK_MESSAGE',
        ];
    }

    public function sendAction()
    {
        $request = Application::getInstance()->getContext()->getRequest()->toArray();
        $fileList = Application::getInstance()->getContext()->getRequest()->getFileList()->toArray();

        $this->checkErrors($request);

        if (! empty($this->errors)) {
            $result = ['status' => 'E', 'errors' => $this->errors];
        } else {
            try {
                $this->processSaveData($request, $fileList);
                $result = ['status' => 'S', 'msg' => $this->arParams['OK_MESSAGE'] ?: 'Ваш отзыв успешно отправлен!'];
            } catch (\Exception $e) {
                $result = ['status' => 'E', 'msg' => 'Ошибка отправки'];
            }
        }
        return $result;
    }

    /**
     * @param CUser $USER
     * @param array $request
     */
    private function checkErrors(array $request): void
    {
        global $USER;
        $this->checkDefaultErrors($request, $USER);
        $this->checkCustomErrors($request);
    }

    /**
     * @param array $request
     * @param CUser $USER
     */
    private function checkDefaultErrors(array $request, CUser $USER): void
    {
        if ($this->arParams['USE_CAPTCHA'] == 'Y' && ! $USER->IsAuthorized()) {
            include_once(Application::getDocumentRoot() . "/bitrix/modules/main/classes/general/captcha.php");
            $captcha_code = $request["captcha_sid"];
            $captcha_word = $request["captcha_word"];
            $cpt = new CCaptcha();
            $captchaPass = COption::GetOptionString("main", "captcha_password", "");
            if (strlen($captcha_word) > 0 && strlen($captcha_code) > 0) {
                if (! $cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass)) {
                    $this->errors[] = Loc::getMessage("SPF_CAPTCHA_WRONG");
                }
            } else {
                $this->errors[] = Loc::getMessage("SPF_CAPTHCA_EMPTY");
            }
        }
    }

    private function checkCustomErrors(array $request): void
    {
        /**This function is designed for custom form validation fill array $this->errors[]*/
    }

    private function processSaveData($request = [], $fileList = []): void
    {
        if ($fileList) {
            foreach ($fileList as $code => $filesData) {
                if (is_array($filesData['name'])) {
                    foreach ($filesData['name'] as $keyFileField => $fileFild) {
                        $request[$code]['n' . $keyFileField] = [
                            'name' => $fileFild,
                            'type' => $filesData['type'][$keyFileField],
                            'tmp_name' => $filesData['tmp_name'][$keyFileField],
                            'error' => $filesData['error'][$keyFileField],
                            'size' => $filesData['size'][$keyFileField],
                        ];
                    }
                } else {
                    $request[$code] = $filesData;
                    $arFileList[$code] = $filesData;
                }
            }
        }
        $this->processSaveIblockElement($request);
        $this->processPost($request, $arFileList);
    }

    /**
     * @param $request
     * @throws \Bitrix\Main\LoaderException
     */
    private function processSaveIblockElement($request): void
    {
        if ($this->arParams['IBLOCK_ADD'] == 'Y' && $this->arParams['IBLOCK_ID'] > 0 && Loader::includeModule('iblock')) {
            $el = new \CIBlockElement;
            $arLoadProductArray = [
                "IBLOCK_ID" => intval($this->arParams['IBLOCK_ID']),
                "PROPERTY_VALUES" => $request,
                "NAME" => 'Элемент',
                "ACTIVE" => "N",
                'PREVIEW_TEXT' => $request['PREVIEW_TEXT'],
                'ACTIVE_FROM' => date('d.m.Y H:i'),
            ];
            $PRODUCT_ID = $el->Add($arLoadProductArray);
            if (! $PRODUCT_ID) {
                throw new Exception($el->LAST_ERROR);
            }
        }
    }

    /**
     * @param $request
     * @param $arFileList
     */
    private function processPost($request, $arFileList = []): void
    {
        if ($this->arParams['EVENT_MESSAGE_ID'] > 0) {
            if ($arFileList) {
                foreach ($arFileList as $item) {
                    $filesID[] = \CFile::SaveFile($item + ['MODULE_ID' => 'main'], "feedback");
                }
            }
            \Bitrix\Main\Mail\Event::send([
                "EVENT_NAME" => "MAIN_FEEDBACK",
                'MESSAGE_ID' => $this->arParams['EVENT_MESSAGE_ID'],
                "LID" => SITE_ID,
                "C_FIELDS" => $request,
                'FILE' => $filesID
            ]);
            foreach ($filesID as $fileID) {
                CFile::Delete($fileID);
            }
        }
    }

    private function getResult(): array
    {
        $result = [];
        global $APPLICATION;
        if ($this->arParams["USE_CAPTCHA"] == "Y") {
            $result['capCode'] = htmlspecialcharsbx($APPLICATION->CaptchaGetCode());
        }
        return $result;
    }

    /**
     * @return void
     */
    public function setResult(): void
    {
        $this->arResult = $this->getResult();
    }

    /**
     * @return void
     */
    public function setParams(): void
    {
        global $USER;
        $this->arParams["USE_CAPTCHA"] = (($this->arParams["USE_CAPTCHA"] != "N" && ! $USER->IsAuthorized()) ? "Y" : "N");
    }

    /**
     * @return mixed|void
     */
    public function executeComponent(): void
    {
        CJSCore::Init(["fx", "ajax", 'jquery']);
        $this->setParams();
        $this->setResult();
        $this->includeComponentTemplate();
    }
}
