<?php

namespace App\Controller;

class JoinController extends AppController
{

    public $name = 'Join';
    public $autoRender = true;

    public function index()
    {
        $this->viewBuilder()->autoLayout(true);
    }
}