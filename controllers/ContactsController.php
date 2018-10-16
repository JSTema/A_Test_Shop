<?php


class ContactsController
{
    public function actionIndex()
    {
        $userEmail = '';
        $userSubject = '';
        $userText = '';
        $result = false;

        if(isset($_POST['submit'])) {
            $userEmail = $_POST['userEmail'];
            $userSubject = $_POST['userSubject'];
            $userText = $_POST['userText'];

            $errors = false;

            if(!User::checkEmail($userEmail)) {
                $errors[] = "Неправильный email";
            }
            if(!User::checkText($userText)) {
                $errors[] = "Ваш текст слишком велик!";
            }
            if(!User::checkName($userSubject)) {
                $errors[] = "Короткое или не указанное название Вашей Темы !";
            }

            if($errors == false) {
               $adminEmail = "artem.dvornik.1987@mail.ru";
               $message = "Text message: " . $userText ;
               $subject = "From: " . $userEmail ."<br/>Email subject:" . $userSubject;
               $result = mail($adminEmail, $subject, $message);
               $result = true;
            }
        }

        require_once (ROOT . "/views/contacts/index.php");

        return true;
    }

}