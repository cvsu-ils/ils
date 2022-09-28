<?php

namespace IntegratedLibrarySystem\App\Middlewares;

use InfinityBrackets\Core\Application;
use InfinityBrackets\Exception\ForbiddenException;
use InfinityBrackets\Middlewares\BaseMiddleware;

class ProfileMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = []) {
        $this->actions = $actions;
    }

    public function execute() {
        if(!Application::$app->controller->HasProfile()) {
            if(empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}