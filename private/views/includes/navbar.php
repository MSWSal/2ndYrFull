

<!DOCTYPE html>
<html lang="en">
<?php
 
$user=new User();
$id2=Auth::getid();   

 
$data = $user->where("id", $id2);
// $data = $data[0];

        ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/css/navbar.css">
   
</head>

<body>
<nav class="navbar">
        <div class="left">
            <div class="nav-i-logo">
                <a href="<?=ROOT?>/home">   <img src="<?=ROOT?>/images/Logo.png" alt="" class="nav-logo"></a> 
            </div>
            <div class="nav-i-1">
               <a href="<?=ROOT?>/becomeadonor"> Become a Donor</a>
            </div>
            <div class="nav-i-org">
               <a href="<?=ROOT?>/Viewcampreqstatus">Organize a Camp</a> 
            </div>
            <div class="nav-i">
              <a href="<?=ROOT?>/newsfeed"> Feed</a> 
            </div>
            <div class="nav-i">
               <a href="<?=ROOT?>/campaigns"> Campaigns</a>
            </div>
        </div>
        <div class="right">

            <div class="nav-i">
               <a href="<?=ROOT?>/contactus"> Contact</a>
            </div>
            <div class="nav-i"> 
            <a href="<?=ROOT?>/aboutbl"> About</a>
            </div>
<!-- submeny dropdown -->
            <div class="nav-i">
                <img src="<?php echo ROOT."/" .$data[0]->profile_img ?>" alt="" class="nav-user-icon" onclick="toggleMenu() ">
            </div>
            <div class="sub-menu-wrapper" id="subMenu">
                <div class="sub-menu">
                  <a href="<?=ROOT?>/archievements"> <div class="user-info">
                        <img src="<?php echo ROOT. "/" . $data[0]->profile_img ?>" alt="">
                        <h3><?php echo  $data[0]->name ?></h3>
                    </div>
                    </a> 
                    <hr>

                    <a href="<?=ROOT?>/myregisteredcamps" class="sub-menu-link">
                        <img src="images/profile 2.png" alt="">
                        <p>Registered Camps</p>
                        <span>></span>
                    </a>
                    <a href="<?=ROOT?>/profile" class="sub-menu-link">
                        <img src="images/profile 2.png" alt="">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>

                    <a href="<?=ROOT?>/logout" class="sub-menu-link">
                        <img src="images/logout.png" alt="">
                        <p>Logout</p>
                        <span>></span>
                    </a>



                </div>
            </div>
        </div>

        <script>
            let subMenu = document.getElementById("subMenu");


            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }


        </script>


<!-- submenu end -->
    </nav>
    <!-- ---------------------------------------navbar end--------------------------------------------    -->

