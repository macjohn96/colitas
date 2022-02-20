<?php namespace App\Controllers;
use CodeIgniter\Controller;

class Pages extends Controller{
    
    public function index(){
        return view('welcome_message');
    }

    public function view($page = 'home'){
        if (!is_file(APPPATH.'/Views/'.$page.'.php')){
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);
        echo view('header', $data);
        echo view('/'.$page, $data);
        echo view('footer', $data);
    }
}