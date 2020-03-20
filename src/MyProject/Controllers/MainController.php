<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . "/../../templates");
    }

    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml("main/main.php", ["articles" => $articles]);
    }

    public function sayHello(string $name)
    {
        $this->view->renderHtml("main/hello.php", ["name" => $name], "Страница приветствия");
    }

    public function sayBye(string $name)
    {
        echo "Пока, ". $name;
    }
}