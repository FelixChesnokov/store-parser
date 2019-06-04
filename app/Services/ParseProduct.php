<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 6/3/19
 * Time: 12:34 AM
 */

namespace App\Services;


class ParseProduct
{
    public $productPageContent;

    public function __construct($productPageContent)
    {
        $this->productPageContent = $productPageContent;
    }

    public function getTextByClassName($className)
    {
        $htmlTag = $this->productPageContent
            ->filter($className);
        if($htmlTag->count() == 1) {
            return $htmlTag->text();
        } else {
            return $htmlTag;
        }

    }
}
