<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ProductController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT * FROM tb_product');

        $result->execute();

        parent::render('product/list', $result);
    }

    public function addAction(): void
    {
        // include dirname(__DIR__) . '/View/product/add.php';
        parent::render('product/add');
    }

    public function editAction(): void
    {
        // include dirname(__DIR__) . '/View/product/edit.php';
        parent::render('product/edit');
    }
}