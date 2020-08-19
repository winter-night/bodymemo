<?php

namespace App\Controller;

class JoinController extends AppController
{

    public function initialize()
    {
        $this->name = 'Join';
        $this->viewBuilder()->autoLayout(false);
        $this->autoRender = false;

    }

    public function index()
    {
        $this->viewBuilder()->autoLayout(true);
    }
}