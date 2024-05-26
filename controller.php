<?php
require_once 'model.php';
require_once 'config.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }
	//handle home
    public function handleRequest(){
        $action = $_GET['action'] ?? 'home';

        switch($action){
            case 'register':
                $this->registerAuth();
                break;
            case 'login':
                $this->loginAuth();
                break;
            case 'panel':
                $this->showPanel();
                break;
            default:
                $this->showHome();
                break;
        }
    }

    private function showHome() {
        require 'home.php';
    }

	//rejestracja
    private function registerAuth(){
        $email = $_POST['email'] ?? '';
        $firstName = $_POST['firstName'] ?? '';
        $lastName = $_POST['lastName'] ?? '';
        $phoneNumber = $_POST['phoneNumber'] ?? '';
        $region = $_POST['region'] ?? '';
        $pass = $_POST['pass'] ?? '';
        $passAgain = $_POST['passAgain'] ?? '';

        // Walidacja danych
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Nieprawidłowy adres email.");
        }
        if (strlen($pass) < 6) {
            die("Hasło musi mieć co najmniej 6 znaków.");
        }
        if ($pass !== $passAgain) {
            die("Hasła nie są zgodne.");
        }
        if (empty($firstName) || empty($lastName) || empty($phoneNumber) || empty($region)) {
            die("Wszystkie pola są wymagane.");
        }

        $passhashed = password_hash($pass, PASSWORD_BCRYPT);
        $this->model->saveData($email, $passhashed, $firstName, $lastName, $region, $phoneNumber);
        header('Location: login.php');
        exit();
    }

	//logowanie
    private function loginAuth(){
        $email = $_POST['email'] ?? '';
        $pass = $_POST['pass'] ?? '';

        // Walidacja danych
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Nieprawidłowy adres email.");
        }
        if (empty($pass)) {
            die("Hasło jest wymagane.");
        }

        $hashedPass = $this->model->getPassHashed($email);
        if ($hashedPass == null) {
            die("Nieprawidłowy mail.");
        } else {
            if (password_verify($pass, $hashedPass)) {
                $_SESSION['user'] = $email;
                $_SESSION['role'] = $this->model->getUserRole($email);
                header('Location: index.php?action=panel');
                exit();
            } else {
                die('Nieprawidłowe hasło.');
            }
        }
    }

	//
    private function showPanel(){
        if (!isset($_SESSION['role'])) {
            header('Location: login.php');
            exit();
        }

        $this->checkUserAccess($_SESSION['role']);
    }
	// przekierowanie na odpowiedni panel
    private function checkUserAccess($requiredRole) {
        if (!isset($_SESSION['user'])) {
            header('Location: login.php');
            exit();
        }

        switch ($requiredRole) {
            case 'admin':
                header('Location: paneladmin.php');
                break;
            case 'worker':
                header('Location: panelworker.php');
                break;
            case 'user':
                header('Location: paneluser.php');
                break;
            default:
                header('Location: login.php');
                break;
        }
        exit();
    }
}
?>
