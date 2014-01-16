<?php namespace RainLab\Blog\Controllers;

use BackendMenu;
use Backend\Classes\BackendController;

class Posts extends BackendController
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'form_config.yaml';
    public $listConfig = 'list_config.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'posts');
    }
}