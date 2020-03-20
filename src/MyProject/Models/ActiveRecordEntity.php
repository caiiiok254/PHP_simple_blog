<?php

namespace Myproject\Models;

use MyProject\Services\Db;

abstract class ActiveRecordEntity
{
    protected $id;
    protected $name;
    protected $text;
    protected $authorId;
    protected $createdAt;

    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public static function findAll(): array
    {
        $db = Db::getInstance();
        return $db->query("SELECT * FROM `". static::getTableName(). "`;", [], static::class);
    }

    public static function getById(int $id): ?self
    {
        $db = Db::getInstance();
        $entities = $db->query(
            "SELECT * FROM `" . static::getTableName() . "` WHERE id=:id;",
            [":id" => $id],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace("_", "", ucwords($source, "_")));
    }

    abstract protected static function getTableName(): string;
}