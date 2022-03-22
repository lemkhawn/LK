<?php
session_start();
 include('connect.php');
 ; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="pay.css">
    <title>Update Premium</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <img src="images/Slider/1.png">
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="center-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-4">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="name">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4">

                                </div>

                                <!--  -->
                                <?php
                                    include ("connect.php");
                                    if(isset($_SESSION['username'])){
                                        $username = $_SESSION['username']; 
                                        $sql = "Select * from `user` where username = '$username'";
                                        $result = mysqli_query($connect, $sql);
                                        while ($row = mysqli_fetch_array($result))
                                        {
                                            $username = $row['username'];
                                        $fullname = $row['fullname'];
                                        $password = $row['password'];
                                        $phonenumber = $row['phone_number'];
                                        $email = $row['email'];
                                        $role = $row['role'];  
                                        
                                    }
                                ?>
                                
                                <!--  -->
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="nameCenter">
                                        <h3><b><?php echo"$username" ?> <i class="fas fa-check-circle"></i></b></h3>
                                        <p><?php echo"$role" ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="col-lg-4">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Donate">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="Donate">
                                        <div class="MOMO">
                                            <a href="https://me.momo.vn/Tunnie"><button type="button"> <img src="images/momo.jpg" alt=""></button></a>
                                        </div>
                                        <div class="VIB">
                                            <a href="#VIB"><button type="button"> <img src="images/VIB.png" alt=""></button></a>
                                            <div class="dialog overlay" id="VIB">
                                                <div class="dialog-body">
                                                    <a class="dialog-close-btn" href="#">&times;</a>
                                                    <img src="images/VIB-Code.jpg" style="width:100%; border-radius: 0px;"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                                    include ('connect.php');
                                    if(isset($_POST['updateRole']))
                                    {
                                        $username = $_POST['username'];
                                        $fullname = $_POST['fullname'];
                                        $password = $_POST['password'];
                                        $phonenumber = $_POST['phone_number'];
                                        $email = $_POST['email'];
                                        $role = $_POST['role'];  
                                        $sql = " UPDATE `user` SET `role`='$premium' WHERE username = '$username' ";
                                        $updateRole = mysqli_query($connect,$sql);
                                        if($updateRole){
                                                echo " Update Premium Successfully
                                                <script>alert('Welcome $username, Login Now!');
                                                window.open('index.php#login', '_self');</script>";
                                        }
                                        else{
                                                echo "Error!";
                                        }
                                    }
                                ?>
                <div class="col-lg-2">

                </div>
            </div>
        </div>
    </div>
</body>

</html>
