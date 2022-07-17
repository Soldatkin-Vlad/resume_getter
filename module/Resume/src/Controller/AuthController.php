<?php

declare(strict_types=1);

namespace Resume\Controller;

use Laminas\Mvc\Controller\AdstractActionController;
use Laminas\View\Model\ViewModel;

class AuthController extends AdstractActionController
{
    public function createAction()
    {
        return new ViewModel();
    }
}