<?php  if(isset($_SESSION['login']) && $_SESSION['login'] && $_SESSION['login'] == 'admin' ) { ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- AdminLTE -->
        <link rel="stylesheet" href="./AdminLTE/css/bootstrap.min.css">
        <link type="text/css" href="./AdminLTE/js/jquery-ui-1.9.2.custom/development-bundle/themes/base/jquery-ui.css" rel="stylesheet" />
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
        <link rel="stylesheet" href="./AdminLTE/css/AdminLTE.min.css">
        <link rel="stylesheet" href="./AdminLTE/css/_all-skins.min.css">
        <link rel="stylesheet" href="./AdminLTE/css/main_v2.1.9.css">

        <!-- dataTables -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
        <link rel="stylesheet" type="text/css" href="./datatables/datatables.min.css">

        <!-- sort icon -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

        <!-- awesome !!!if not internet-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- datepicker -->
        <!-- <link type="text/css" href="AdminLTE/js/jquery-ui-1.9.2.custom/development-bundle/themes/base/jquery.ui.datepicker.css" rel="stylesheet" />  -->

        <!-- sweetalert -->
        <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css"> -->

        <!-- my customer.css -->
        <link rel="stylesheet" href="./css/mine.css">

    </head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">

<div class="wrapper">

    <header class="main-header">
        <a href="?page=start&hook=Admin" class="logo">
             <span class="logo-mini"><b>U</b></span>
            <span class="logo-lg">Users</span>
        </a>

        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-user fa-fw"></i>  
                          admin
                        </a>
                        <ul class="dropdown-menu">
                           <li>   
                              <ul class="menu">
                                 <li>
                                    <div class="add_funct_top">
                                      <a class="btn btn-default btn-xs btn-block page_content" href="?page=start&hook=Logout" ><div class="dropdown-menu-div">Logout</div></a>
                                      <form id="logout-form" action="#" method="POST" style="display: none;">
                                      </form>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

     <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header bolder" style="color: white;">MENU</li>
                <li class="header" style="font-size: 15px;">USERS</li>  
                <li>
                    <a href="?page=start&hook=Admin&type=teacher" class="list">
                        <i class="fa fa-folder-o"></i> <span>O'qituvchilar ro'yxati</span>
                    </a>
                </li>
                <li>
                    <a href="?page=start&hook=Admin&type=course"> 
                        <i class="fa fa-folder-o"></i> <span>Darslar ro'yxati</span>
                    </a>
                </li>   
                <li>
                    <a href="?page=start&hook=Admin&type=message"> 
                        <i class="fa fa-folder-o"></i> <span>Fikr va takliflar</span>
                    </a>
                </li>   
                <li>
                    <a href="?page=start&hook=Admin&type=blog"> 
                        <i class="fa fa-folder-o"></i> <span>Tadbirlar ro'yxati</span>
                    </a>
                </li>                  
            </ul>
        </section>

    </aside>

    <div class="content-wrapper">
    <div class="editor"></div>
    <table class="table">
	<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
                
              <?php switch ($_GET['type']) {
                  case 'teacher':
                      require_once 'views/brick-standart/teacher.php';
                      break;
                      case 'course':
                        require_once 'views/brick-standart/course.php';
                        break;
                      case 'message':
                         require_once 'views/brick-standart/message.php';
                        break;
                      case 'blog':
                         require_once 'views/brick-standart/blog.php';
                         break;
                  default:
                      echo '<h1 class="text-center">Admin Panel</h1>';
                      break;
              } ?>
                 
     </div>
    </div>
  </div>
  
 </div>
</div>
		</section>
    </div>


</div>


<!-- AdminLTE -->
<script src="./AdminLTE/js/jQuery-2.2.0.min.js"></script>
<script src="./AdminLTE/js/jquery-ui.min.js"></script>
<script src="./AdminLTE/js/bootstrap.min.js"></script>
<script src="./AdminLTE/js/app.min.js"></script>

<!-- dataTables -->
<!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
<script src="./datatables/datatables.min.js"></script>

<!-- datepicker -->
<!-- <script type="text/javascript" src="AdminLTE/js/jquery-ui-1.9.2.custom/development-bundle/ui/i18n/jquery.ui.datepicker-en.js"></script> -->

<!-- Sweet Alert -->
<!-- <script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script> -->

<!-- my customer js -->
<script src="./js/mine.js"></script>

<script>
$(document).ready(function(){
   $('.removeOne').click(function(){
     BaseRecord.remove($('.getType').attr('id'),$(this).attr('id'));
   });
   

});
</script>

</body>

</html>

<?php }else echo 'Access error...'; ?>