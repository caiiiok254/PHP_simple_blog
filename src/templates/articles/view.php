<?php include __DIR__ . "/../header.php"; ?>
    <h1><?= $article->getName() ?></h1>
    <h3><i><?= $article->getAuthor()->getNickname() ?></i></h3>
    <p><?= $article->getText() ?></p>
<?php if ($user !== null AND $user->getRole() === "admin"): ?>
<h4><a href="<?=$article->getId()?>/edit">Редактировать статью</a></h4>
<?php else: ?>
<?php endif; ?>
<?php include __DIR__ . "/../footer.php"; ?>
