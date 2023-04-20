<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        
        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('components/header', $data)
            .view('components/navbar')
            . view('pages/' . $page)
            . view('components/footer');
    }
}