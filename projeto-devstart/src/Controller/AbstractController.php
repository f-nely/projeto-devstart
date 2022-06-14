<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    public function includeHtml()
    {
        include dirname(__DIR__) . '/View/_partials/header.php';
        include dirname(__DIR__) . '/View/_partials/footer.php';
    }
    public function render(string $viewName, $data = null): void
    {
        self::includeHtml();
        include dirname(__DIR__) . "/View/{$viewName}.php";
    }

    public function renderMessage(string $message): void
    {
        self::includeHtml();
        include dirname(__DIR__) . "/View/_partials/message.php";
    }
}