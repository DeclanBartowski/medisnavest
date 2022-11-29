<?php

namespace SP\Tools\Controller;

use SP\Tools\TestService;

class TestServiceController extends \Bitrix\Main\Engine\Controller
{
    public function configureActions()
    {
        return [
            'test' => [
                'prefilters' => []
            ],
        ];
    }

    public function testAction($id, $mark)
    {
        $testCase = new TestService();
    }

}