<?php

namespace App\Controller;

class JoinController extends AppController
{
    
    
    public function initialize()
    {
        $this->name = 'Join';
        $this->viewBuilder()->autoLayout(false);
        $this->viewBuilder()->layout('Join');

    }

    public function index()
    {
        $this->viewBuilder()->autoLayout(true);
    }
}