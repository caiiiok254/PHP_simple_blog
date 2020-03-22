<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            Мой блог
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right">
            <?php if (!empty($user)): ?>
          <div>Привет, <?=$user->getNickname()?> | <a href="http://testsite.jojo/users/logout">Выйти</a></div>
            <?php else: ?>
            <div><a href="http://testsite.jojo/users/login">Войти</a> | <a href="http://testsite.jojo/users/register">Зарегистрироваться</a></div>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td>
