<?php
require_once './models/model_product.php';

use ProductModel\Product;

class StartController {

protected $model_product;

public function __construct()
{
   $this->model_product = new Product;
}

public function actionStart()
{
  $news = $this->model_product->funcGetNews();
  require_once './views/start/view.php';
}

public function actionSearchProducts()
{
   if($this->model_product->validateSearch($_POST['search_input']))
   $_SESSION['products'] = $this->model_product->funcSearchProducts($_POST['search_input']);
   else {
      $_SESSION['error_validation']=$this->model_product->error_validation;
   }
   header("location:?page=start");
}

public function actionAjaxLang()
{
  $_SESSION['lang'] = $_POST['lang'];
}

//0707004545

public function actionAbout()
{
    require_once './views/about/view.php';
}
public function actionOqituvchilar()
{
    $teachers = $this->model_product->funcGetTeachers();
    require_once './views/oqituvchilar/view.php';
}
public function actionDarslar()
{   
    $courses = $this->model_product->funcGetCourses();
    require_once './views/darslar/view.php';
}
public function actionQiziqarli()
{
   $blogs =  $this->model_product->funcGetBlogs();
    require_once './views/qiziqarli/view.php';
}
public function actionBoglanish()
{
   $contacts = $this->model_product->funcGetContacts();
    require_once './views/boglanish/view.php';
}

public function actionLogin()
{
    if(isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['login'] == 'admin'){
    require_once './views/admin/view.php';
    }else{
      require_once './views/login/view.php';
    }
}

public function actionAdmin()
{
  $blogs =  $this->model_product->funcGetBlogs();
  $courses = $this->model_product->funcGetCourses();
  $teachers = $this->model_product->funcGetTeachers();
  $messages =  $this->model_product->funcGetMessages();
  require_once './views/admin/view.php';
}

public function actionMessage()
{
   if($this->model_product->funcValidateMessage($_POST['name'], $_POST['email'], $_POST['message'])){
    $this->model_product->funcMessage($_POST['name'], $_POST['email'], $_POST['message']);
    $_SESSION['error'] = "<div class='alert alert-success' role='alert'>
    Sizning xabrangiz qabul qilindi.
  </div>";
    }else{
      $_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
      Iltimos to'liq va bexato yozing!
    </div>";
    }
    header('location:?page=start&hook=Boglanish');
}

public function actionToDashboard()
{
    $_SESSION['errors'] = '';
    if($this->model_product->funcValidate($_POST['login'], $_POST['password'])){
    $user = $this->model_product->funcBaseValidate($_POST['login'], $_POST['password']);
      if($user[0]['role'] == 'admin'){
        $_SESSION['login'] = $user[0]['role'];
        $teachers = $this->model_product->funcGetTeachers();
     header('location:?page=start&hook=Admin');
      }else{
        $_SESSION['errors'] = 'Bunday foydalanuvchi mavjud emas';
       header('location:?page=start&hook=Login');
      }   
    }
    else {
      $_SESSION['errors'] = "Login va parolni to'liq yozing!";
    header('location:?page=start&hook=Login');
    }
}

// -------------------------------------- FOR ADMIN ---------------------------------------------  

public function actionLogout()
{
  $_SESSION['login'] = '';
  require_once './views/start/view.php';
}

public function actionRemoveTeacher()
{
   $this->model_product->funcRemoveTeacher($_POST['id']);
}

public function actionGetTeacherInfo()
{
   echo json_encode($this->model_product->funcGetTeacherInfo($_GET['id']));
}

public function actionTypeRemove()
{
    $this->model_product->funcTypeRemove($_POST['typeRemove'], $_POST['id']);
}

public function actionInsert()
{
    switch($_GET['typeInsert']){
    case 'course' :  require_once 'views/edit/course.php';
     break;
    case 'teacher' :  require_once 'views/edit/teacher.php';
     break;
    case 'blog' :  require_once 'views/edit/blog.php';
     break;

    }
}

public function actionInsertTeacher()
{
   $this->model_product->funcInsertTeacher($_POST['name'], $_POST['course']);
   header('location:?page=start&hook=Admin&type=teacher');
}

public function actionInsertCourse()
{
   $this->model_product->funcInsertCourse($_POST['course']);
   header('location:?page=start&hook=Admin&type=course');
}

}

?>
