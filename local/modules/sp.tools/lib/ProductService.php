<?php

namespace SP\Tools;

class ProductService
{
    public function setViewedProduct($productID)
    {
        $session = \Bitrix\Main\Application::getInstance()->getSession();
        $session['VIEWED_PRODUCTS'][$productID] = $productID;
    }
}