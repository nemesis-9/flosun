<?php

namespace app\controllers;

use app\core\Application;
use Controller;
use app\core\Request;

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

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'Handling Submitted Data';
    }
}