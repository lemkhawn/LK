<?php
session_start();
 include('connect.php')
 ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/favicon-1.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Dancing+Script:wght@500&family=Meow+Script&display=swap" rel="stylesheet">

    <title>TuneSource Music</title>
</head>

<body>
    <!-- Header -->
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <!-- Logo -->
                    <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><h1><span style="color:beige;  font-family: 'Baloo Bhaijaan 2', cursive; ">TuneSource <i class="fas fa-bars" style="text-align: center"></i></span></h1></a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- Search -->
                <form action="search.php" method="GET">
                    <div class="box_search">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input type="search" name="Search" >
                    </div>
                </form>
                </div>
                <div class="col-lg-3 col-md-3">
                <!-- Display -->
                    <!--Login -->
                    <a href="#login"><button><span style="color:beige;  font-family: 'Dancing Script', cursive; "> Login</span></button></a>
                    <div class="dialog overlay" id="login">
                        <div class="dialog-body">
                            <h3 style="text-align: center">Login</h3>
                            <a class="dialog-close-btn" href="#">&times;</a>
                            <form class="diglog-form" action="#" method="POST">
                                <table>
                                    <tr>
                                        <th>Username</th>
                                        <th><input type="text" placeholder="Enter Username" name="username"></th>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <th><input type="password" placeholder="Enter Password" name="password"></th>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button name="login">Signin</button></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><a href="#signup">Create a account</a></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <!-- --------------------------------------------------------- -->
                    <?php
                        include ('connect.php');
                        if(isset($_POST['login']))
                        {
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password' ";
                            $result = mysqli_query($connect, $sql);
                            $row_user = mysqli_fetch_array($result);
                            $check_login = mysqli_num_rows($result);
                            if($check_login > 0){
                                echo "
                                <script>alert('Welcome $username');
                                    window.open('index.php', '_self');</script>
                                ";
                                $_SESSION['username'] = $username;
                                $_SESSION['role'] = $row_user['role'];
                            }else {
                                echo "Failed!";
                            }
                    }

                    ?>
                    <!-- --------------------------------------------------------- -->

                    <!-- Signup -->
                    <div class="dialog overlay" id="signup">
                        <div class="dialog-body">
                            <h3 style="text-align: center">Signup</h3>
                            <a class="dialog-close-btn" href="#">&times;</a>
                            <form class="diglog-form" action="#" method="POST">
                                <table>
                                    <tr>
                                        <th>Username</th>
                                        <th><input type="text" placeholder="Enter your username" name="username"></th>
                                    </tr>
                                    <tr>
                                        <th>Fullname</th>
                                        <th><input type="text" placeholder="Enter your fullname"  name="fullname"></th>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <th><input type="password" placeholder="Enter your password"  name="password"></th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th><input type="email" placeholder="Enter your email"  name="email"></th>
                                    </tr>
                                    
                                    <tr>
                                        <td><input type="checkbox" style="height: 15px;"></td>
                                        <td>Remember to login</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><a href="#login"><button name="signup">Sign up</button></a></td>
                                    </tr>                                   
                                </table>
                                <!-- ---------------------------------------------------------------- -->
                                <?php
                                    include ('connect.php');
                                    if(isset($_POST['signup']))
                                    {
                                        $username = $_POST['username'];
                                        $fullname = $_POST['fullname'];
                                        $password = $_POST['password'];
                                       
                                        $email = $_POST['email'];
                                        $role = $_POST['role'];
                                        $sql = " INSERT INTO `user`(`username`, `fullname`, `password`, `email`, `role`) VALUES ('$username','$fullname','$password','$email','Standard') ";
                                        $signup = mysqli_query($connect,$sql);
                                        if($signup){
                                                echo " Sign-Up Successfully
                                                <script>alert('Welcome $username, Login!');
                                                window.open('index.php#login', '_self');</script>";
                                        }
                                        else{
                                                echo "Error!";
                                        }
                                    }
                                ?>
                                <!-- ---------------------------------------------------------------- -->
                            </form>
                        </div>
                    </div>                  
                </div>
            </div>
            <!-- MENU HIDDEN -->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h4 class="offcanvas-title" id="offcanvasScrollingLabel"> <span style="color:beige;  font-family: 'Baloo Bhaijaan 2', cursive;"></span> Welcome! <?php
                        include ("connect.php");
                        if(isset($_SESSION['username'])){
                            $username = $_SESSION['username']; 
                            $sql = "Select * from `user` where username = '$username'";
                            $result = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_array($result))
                            {
                                $role = $row['role']; 
                            echo " $username | $role ";
                            
                        }
                    ?></h4>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <h6><?php  } ?></h6>  




                    <!-- ----------------------------------------------------------------------------------- -->
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                           <a href="index.php"> <button ><i class="fas fa-home"></i> Home</button></a>
                            <a href="#myProfile">
                            <button><i class="fas fa-user-circle"></i> Profile</button>
                            </a>
                            
                            <button><i class='bx bxs-playlist' ></i><a href="manage.php" > Manage </a></button>
                            <a href="./Logout.php"><button><i class="fas fa-sign-out-alt"></i> Log Out</button></a>
                        </div>
            </div>
            <!-- MENU HIDDEN -->




            <!-- DIALOG PROFILE -->
                    <div class="dialog overlay" id="myProfile">
                        <div class="dialog-body">
                            <h3 style="text-align: center">My Profile</h3>
                            <a class="dialog-close-btn" href="#">&times;</a>
                            <form class="diglog-form" action="#" method="POST">
                                <table>
                                    <?php                                      
                                        include('connect.php');
                                        if(isset($_SESSION['username'])){
                                            $username = $_SESSION['username']; 
                                            $sql = "Select * from user where username = '$username'";
                                            $result = mysqli_query($connect, $sql);
                                            if($role == "Admin")
                                            {                                              
                                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    $username = $row['username'];
                                                    $fullname = $row['fullname'];
                                                    $password = $row['password'];
                                                    
                                                    $email = $row['email'];
                                                    $role = $row['role'];  
                                                    echo"
                                                    <tr>
                                                        <th>My Profile : </th>
                                                        <td>$username</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>Email : </th>
                                                        <td>$email</td> 
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>Type Account : </th>
                                                        <td>$role</td> 
                                                    </tr>
                                                    <tr>
                                                        <th> <a href='manage.php'> Manage </a></th>
                                                    </tr>
                                                    ";
                                                }
                                            }
                                            else
                                            {
                                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    $username = $row['username'];
                                                    $fullname=$row['fullname'];
                                                    $password = $row['password'];
                                                    
                                                    $email = $row['email'];
                                                    $role = $row['role'];                                                                                                                                                       
                                                ?>
                                                    <tr>
                                                        <th>My Profile : </th>
                                                        <td><?php echo "$username" ?></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th>Email : </th>
                                                        <td><?php echo "$email" ?></td> 
                                                    </tr>
                                                
                                                    <tr>
                                                        <th>Type Account : </th>
                                                        <td><?php echo "$role" ?></td> 
                                                    </tr>
                                                   
                                                
                                            <?php } } }?>            
                                </table>
                            </form>
                        </div>
                    </div>
            <!-- DIALOG PROFILE -->
           

<!--  -->

<!--  -->




            </div>
        </header>



