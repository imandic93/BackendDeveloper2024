<?php

namespace System;

abstract class Controller
{
    public function render(string $view, array $viewData = [])
    {
        ob_start();

        require VIEW . "/$view.php";

        return ob_get_clean();
    }
}