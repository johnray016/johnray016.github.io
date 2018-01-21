 <?php
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
?>

 <nav>
    <div class="nav-wrapper">

        <div class="nav-container-left">
          <img src="assets/img/logo.png" alt="" class="logo">  
        </div>

        <div class="search-box-container">
          <input type="text" class="search-box" placeholder="Search for outdoor gears">
          <i class="fa fa-search" aria-hidden="true"></i>
        </div> 
        
        <div class="nav-button-container">
          <ul class="nav-button">
            <a href="#" target="_blank"><li><i class="fa fa-question-circle-o" aria-hidden="true"></i>CUSTOMER CARE</li></a>
            <a href="#" target="_blank"><li><i class="fa fa-user" aria-hidden="true"></i>LOGIN</li></a>
          </ul>              
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </div>
        <div id="mySidemenu" class="sidemenu">
          <a href="javascript:void(0)" class="close" onclick="closeMenu()">
            <i class="fa fa-times" aria-hidden="true""></i></a>
            <ul id="mySideNav">              
                <a href="index.php"><li>HOME</li></a>
                <a href="#"><li>APPAREL</li></a>
                <a href="#"><li>BACKPACK</li></a>
                <a href="#"><li>TENTS</li></a>
                <a href="#"><li>HIKING GEARS</li></a>
                <a href="#"><li>HAMMOCKS</li></a>
                <a href="#"><li>SLEEPING GEARS</li></a>
            </ul>
            <a href="#" target="_blank"><i class="fa fa-question-circle-o" aria-hidden="true"></i>CUSTOMER CARE</a>
            <br>  
            <a href="#" target="_blank"><i class="fa fa-user" aria-hidden="true"></i>LOGIN</a>
        </div>
        <div class="nav-bottom-container">
            <ul class="menu">              
                <a href="index.php"><li>HOME</li></a>
                <a href="#" target="_blank"><li>APPAREL</li></a>
                <a href="#" target="_blank"><li>BACKPACK</li></a>
                <a href="#" target="_blank"><li>TENTS</li></a>
                <a href="#" target="_blank"><li>HIKING GEARS</li></a>
                <a href="#" target="_blank"><li>HAMMOCKS</li></a>
                <a href="#" target="_blank"><li>SLEEPING GEARS</li></a>
            </ul>
            <i class="fa fa-bars" aria-hidden="true" onclick="openMenu()"></i>            
        </div>
        
    </div>
</nav>