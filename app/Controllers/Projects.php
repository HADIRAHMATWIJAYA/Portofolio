<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function index(): string
    {
        return view('projects');
    }
}
