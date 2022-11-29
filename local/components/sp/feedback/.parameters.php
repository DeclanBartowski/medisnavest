<?

if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

$arComponentParameters = [
    "PARAMETERS" => [
        "AJAX_MODE" => [],
        "IBLOCK_ADD" => [
            "NAME" => Loc::getMessage('SPF_IBLOCK_ADD'),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "BASE",
        ],
        "IBLOCK_ID" => [
            "NAME" => Loc::getMessage('SPF_IBLOCK_ID'),
            "TYPE" => "STRING",
            "PARENT" => "BASE",
        ],
        "USE_CAPTCHA" => [
            "NAME" => Loc::getMessage('SPF_CAPTCHA'),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "BASE",
        ],
        "EVENT_MESSAGE_ID" => [
            "NAME" => Loc::getMessage('SPF_EMAIL_TEMPLATES'),
            "TYPE" => "STRING",
            "PARENT" => "BASE",
        ],
        "POLICY_URL" => [
            "NAME" => Loc::getMessage('SPF_POLICY_URL'),
            "TYPE" => "STRING",
            "PARENT" => "BASE",
        ],
    ]
];


?>