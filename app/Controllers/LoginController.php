<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Utils\View;

class LoginController extends Controller {
    public function index() {
        $this->view('Login/index');
    }
    public function manager() {
        if (isset($_POST['submit_login'])) {
            $username = $_POST['username'];
            $inputEmail = $_POST['email'];
            $inputPassword = $_POST['password'];

            $login = false;
            if ($inputEmail === 'matheus@email' && $inputPassword === '12345') {
                $login = true;
            }

            if ($login) {
                $_SESSION['login'] = [
                    'username' => $username,
                    'email' => $inputEmail,
                    'password' => $inputPassword
                ];
    
                header('Location: /');
            } else {
                $this->index();
                echo "<p style='color: red'>Dados inválidos</p>";
            }
        }
    }
}