<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use Myproject\View\View;

class ArticlesController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . "/../../templates");
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);
        if ($article === null) {
            $this->view->renderHtml("error/404.php", [], "Page not found", 404);
            return;
        }

        $this->view->renderHtml("articles/view.php", ["article" => $article]);
    }
}
