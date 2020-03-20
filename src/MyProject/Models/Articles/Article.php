<?php

namespace MyProject\Models\Articles;

use Myproject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;

class Article extends ActiveRecordEntity
{
    protected $name;
    protected $text;
    protected $authorId;
    protected $createdAt;

    public function getName(): string
    {
        return $this->name;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getAuthorId(): int
    {
        return (int) $this->authorId;
    }

    protected static function getTableName(): string
    {
       return 'articles';
    }

    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }
}