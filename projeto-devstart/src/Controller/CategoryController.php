<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT * FROM tb_category');

        $result->execute();

        parent::render('category/list', $result);
    }

    public function addAction(): void
    {
        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            $query = "INSERT INTO tb_category (name, description) VALUES ('{$name}', '{$description}')";

            $con = Connection::getConnection();

            $result = $con->prepare($query);
            $result->execute();

            echo 'Pronto, categoria inserida.';
        }
        parent::render('category/add');
    }

    public function editAction(): void
    {
        // parent::render('category/edit');
    }
}