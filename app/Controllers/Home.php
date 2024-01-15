<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function indexVersion(): string
    {
        return view('versionContext');
    }

    public function indexISMSScope(): string
    {
        return view('ISMSScope');
    }

    public function indexISMSProcess(): string
    {
        return view('ISMSProcess');
    }

    public function indexleadershipandcommitment(): string
    {
        return view('leadershipandcommitment');
    }
    
    public function indexISPolicy(): string
    {
        return view('ISPolicy');
    }
}
