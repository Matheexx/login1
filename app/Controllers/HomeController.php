<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Utils\View;

class HomeController extends Controller {
    public function index() {
        if (isset($_SESSION['login'])) {
            $user = $_SESSION['login'];

            $view = new View('home', 'Home');
            $this->viewWithTemplate($view, [
                'username' => $user['username']
            ]);
        } else {
            header('Location: /login');
        }
    }
}