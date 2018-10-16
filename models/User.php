<?php


class User
{
    public static function register($name, $email, $password)
    {
        $db = Db::getPDOConnection();
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();

    }

    public static function checkText($text) {
        $text = addslashes($text);
        if( (strlen($text) <= 100) && (strlen($text) >= 4) ){
            return true;
        }
        return false;
    }

    public static function  checkPhone($phone)
    {
        $phone = intval($phone);
        if ( (strlen($phone) <= 13) && (strlen($phone) >= 7) ) {
           return true;
        }
        return false;
    }

    public static function checkName($name)
    {
        $name = trim($name);
        if(strlen($name) >= 3) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email)
    {
        $email = trim($email);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    public static function checkPassword($password)
    {
        $password = trim($password);
        if(strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkUserData($email, $password)
    {

        $db = Db::getPDOConnection();

        $sql = "SELECT `id`, `name`, `email`, `password`  FROM `users` WHERE email = :email AND password = :password";

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
    }

    public static  function checkEmailExists($email)
    {
        $db = Db::getPDOConnection();
        $sql = "SELECT * FROM users WHERE email = :email";
        $res = $db->prepare($sql);
        $res->bindParam(':email',$email, PDO::PARAM_STR);
        $res->execute();

        if($res->fetchColumn())
            return true;
        return false;

    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header("Location: /user/login");
    }

    public  static function  isGuest()
    {
        if(isset($_SESSION['user'])) {
            return false;
        } else {
            return true;
        }
    }

    public static function getUserById($id)
    {
        $db = Db::getPDOConnection();
        $sql = "SELECT * FROM `users` WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function edit($id, $name, $password)
    {
        $db = Db::getPDOConnection();
        $sql = "UPDATE `users` 
                SET `name` = :name, `password` = :password
                WHERE `id` = :id ";
        $result = $db->prepare($sql);
        $result->bindParam(':name',$name, PDO::PARAM_STR);
        $result->bindParam(':password',$password, PDO::PARAM_INT);
        $result->bindParam(':id',$id, PDO::PARAM_STR);

        return $result->execute();


    }

}