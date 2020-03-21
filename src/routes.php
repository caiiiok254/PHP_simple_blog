<?php

return [
    "~^articles/(\d+)$~" => [\MyProject\Controllers\ArticlesController::class, "view"],
    "~^hello/(.*)$~" => [\MyProject\Controllers\MainController::class, "sayHello"],
    "~^$~" => [\MyProject\Controllers\MainController::class, "main"],
    "~^bye/(.*)$~" => [\MyProject\Controllers\MainController::class, "sayBye"],
    "~^articles/(\d+)/edit$~" => [\MyProject\Controllers\ArticlesController::class, "edit"],
    "~^articles/add$~" => [\MyProject\Controllers\ArticlesController::class, "add"],
    "~^articles/(\d+)/delete$~" => [\MyProject\Controllers\ArticlesController::class, "delete"],
    "~^users/register$~" => [\MyProject\Controllers\UsersController::class, "signUp"],
];