<?php

namespace app\controllers;

use app\core\Application;
use Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "TheArchNemesis"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact()
    {
        return 'Handling Submitted Data';
    }
}