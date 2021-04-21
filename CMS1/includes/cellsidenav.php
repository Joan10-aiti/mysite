<?php require_once 'includes/action.php'; ?>
<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5"><?php echo $_SESSION['username']; ?></h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="active"><a href="addfruitfulVine.php"> <i class="icon-home"></i>Home </a></li>
          <li><a href="#"> <i class="fa fa-group"></i>View Members </a></li>
          <li><a href="#"> <i class="fa fa-group"></i>Create Report </a></li>
          
          </li>
        </ul>
      </nav>

      ...

Notice: Undefined index: username in C:\xampp\htdocs\CMS1\includes\cellsidenav.php on line 7