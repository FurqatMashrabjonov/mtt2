<?php
namespace ProductModel;

require_once './Valitron/Validator.php';

use Valitron\Validator as V;

class Product {

public $link_db;
public $row_db;
public $action_patch;
public $error_validation;

public function __construct()
{
   require './config/config.php';
   $link = new \PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
   $query = "set names utf8";
   $pstmt = $link->prepare($query);
   $pstmt->execute();
   $this->link_db=$link;
   $this->action_patch = $action_patch;
   V::langDir('./validator_lang');
   if(isset($_SESSION['lang'])) $lang = $_SESSION['lang'];
   else  $lang = 'en';
   V::lang($lang);
}

public function funcStart()
{
   $query = "select id, name, price, image from products where top9=1";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

// public function funcSelectProduct($id)
// {
//    $query = "select id, name, price, image from products where id=:id";
//    $pstmt = $this->link_db->prepare($query);
//    $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);
//    $pstmt->execute();
//    return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
// }

// public function funcSearchProducts($search)
// {
//    $query = "select id, name, price, image from products where name like concat('%',:search,'%')";
//    $pstmt = $this->link_db->prepare($query);
//    $pstmt->bindParam(':search', $search, \PDO::PARAM_STR);
//    $pstmt->execute();
//    return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
// }

// public function validateSearch($search){
//   $v = new V(array('search' => $search));
//     $v->rule('required', array('search'));
//     $result_validate=$v->validate();
//     $this->error_validation=$v->errors();
//     return $result_validate;

// }

public function funcGetTeachers()
{
   $query = "select id, name, image from oqituvchilar";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcGetContacts()
{
   $query = "select address, number ,  website from contact";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcValidate($login, $password){
     $v = new V(array('login' => $login, 'password' => $password));
       $v->rule('required', array('login', 'password'));
       $result_validate=$v->validate();
       return $result_validate;
}

public function funcValidateMessage($name, $email, $message){
   $v = new V(array('name' => $name, 'email' => $email, 'message' => $message));
     $v->rule('required', array('name', 'email', 'message'));
     $result_validate=$v->validate();
     return $result_validate;
}

public function funcBaseValidate($login, $password)
{
   $query = "select id,role from user where login =:login and password =:password ";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':login', $login, \PDO::PARAM_STR);
   $pstmt->bindParam(':password', $password, \PDO::PARAM_STR);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
   
}

public function funcGetCourses()
{
   $query = "select id, name, image from darslar";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcGetBlogs()
{
   $query = "select id,  image from blogs";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcGetMessages()
{
   $query = "select id, name, email, message from message";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcGetNews()
{
   $query = "select id, title, image from news";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcMessage($name, $email, $message)
{
   $query = "insert into message(name, email, message) values(:name, :email, :message)";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':name', $name, \PDO::PARAM_STR);
   $pstmt->bindParam(':email', $email, \PDO::PARAM_STR);
   $pstmt->bindParam(':message', $message, \PDO::PARAM_STR);
   $pstmt->execute();
}

// -------------------------------------- FOR ADMIN ---------------------------------------------  



public function funcGetTeacherInfo($id)
{
   $query = "select id, name, subject from oqituvchilar where id=:id";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcTypeRemove($type, $id)
{
   $query = "delete from ".$type." where id=:id";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':id', $id, \PDO::PARAM_STR);
   return $pstmt->execute();
}

public function funcInsertTeacher($name, $course)
{
   $query = "insert into oqituvchilar(name, subject) values(:name, :course)";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':name', $name, \PDO::PARAM_STR);
   $pstmt->bindParam(':course', $course, \PDO::PARAM_STR);
   return $pstmt->execute();
}



}

?>
