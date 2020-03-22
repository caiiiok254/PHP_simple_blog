<?php

namespace MyProject\Controllers;

use MyProject\Exceptions\NotFoundException;
use MyProject\Models\Articles\Article;
use MyProject\Models\Users\User;

class ArticlesController extends AbstractController
{
    public function view(int $articleId): void
    {
        $article = Article::getById($articleId);

        if ($article === null) {
           throw new NotFoundException();
        }
        $this->view->renderHtml("articles/view.php", ["article" => $article]);
    }

    public function edit(int $articleId): void
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $article->setName("Новое название статьи");
        $article->setText("Новый текст статьи");

        $article->save();
    }

    public function add(): void
    {
        $author = User::getById(1);

        $article = new Article();
        $article->setAuthor($author);
        $article->setName("Новое название статьи");
        $article->setText("Новый текст статьи");

        $article->save();
    }

    public function delete(int $articleId): void
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            echo "Статьи с таким Id не найдено";
            return;
        }

        $article->delete();
        var_dump($article);
    }
}
