<?php

namespace app\controllers;

class Leitores extends Controller
{
    public function index()
    {
        $this->loadView("leitores");
    }
}