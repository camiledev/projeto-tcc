<?php
namespace Src\Views;

class ToView 
{
private $urlView;

    public function __construct($urlView)
{
    $this ->urlView = __DIR__ ."/". $urlView;
}

    public function viewStandard(string $templates, $data = [])
    {
        require $this->urlView . "/".  $templates . ".php";
    }

}