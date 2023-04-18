<?php

class Magazijnen extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Overzicht Magazijn Jamin'
        ];
        $this->view('magazijnen/index', $data);
    }
    
}
