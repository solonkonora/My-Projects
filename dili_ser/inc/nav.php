<?php
// $url = false;
// var_dump($_SESSION);
// if(Session::exist('is_loggedin') && Session::get('is_loggedin') == true) $url = true;

?>
<!-- <div class="wrapper">
    <div class="top_nav">
        <div class="right">
            <ul>
                <li><a href="<?php if($url==true) echo '?page=logout'; else echo '?page=login'; ?>"><?php echo $url == true? 'Logout': 'Login' ?></a></li>   
                <li><a href="#"><i class="fas fa-shopping-cart"></i><span> Cart</a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i><span> Profile</a></li>
            </ul>
        </div>
    </div>
</div> -->

<!-- header start -->
<header class="header">
    <div class="containerner">
        <div class="header-main">
            <div class="logo">
              <a href="#"><img src="photos/logo.png" height="60px" width="60px" alt=""/></a>
            </div>
            <div class="open-nav-menu">
                <span></span>
            </div>
            <!-- navigation menu start -->
            <nav class="nav-menu">
                <div class="close-nav-menu">
                    <i class="fa fa-close" style="font-size:30px; color:red"></i>
                </div>
                <ul class="menu">
                    <li><a class="<?php echo $page == 'home'? 'active' :''; ?>" href="?page=home">Home</a></li>
                    <li><a class="<?php echo $page == 'about'? 'active' :''; ?>" href="?page=about">About</a></li>
                    <li><a class="<?php echo $page == 'service'? 'active' :''; ?>" href="?page=service">Service</a></li>
                    <li><a class="<?php echo $page == 'gallery'? 'active' :''; ?>" href="?page=gallery">Gallery</a></li>
                    <li><a class="<?php echo $page == 'testimonials'? 'active' :''; ?>" href="?page=testimonials">Testimonials</a></li>
                    <li><a class="<?php echo $page == 'contact'? 'active' :''; ?>" href="?page=contact">Contact</a></li>
                    <li><a class="<?php echo $page == 'login'? 'active' :''; ?>" href="?page=login">Login</a></li>
                </ul>
            <!-- navigation menu end -->
        </div>
    </div>
</header>
