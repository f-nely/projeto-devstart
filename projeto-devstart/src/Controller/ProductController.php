<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController
{
    public function listAction(): void
    {
        include dirname(__DIR__) . '/View/product/list.php';
    }

    public function addAction(): void
    {
        include dirname(__DIR__) . '/View/product/add.php';
    }

    public function editAction(): void
    {
        include dirname(__DIR__) . '/View/product/edit.php';
    }
}