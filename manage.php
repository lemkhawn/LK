<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>Manage</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6">
                    <form action="search-admin.php" method="GET">
                        <div class="search">
                            <input type="search" placeholder="Enter Artist | User | Song you want to search" name="Search">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="containter">
            <div class="row">
                <div class="col-lg-3">
                    <div class="admin-manage">
                        <h2>ADMIN</h2>
                        
<!--------------------------------- PHP --------------------------------->
                                <?php
                                    include('connect.php');
                                    $sql = "Select * from `user`";
                                    $result = mysqli_query($connect, $sql);
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        $username = $row['username'];
                                        $fullname = $row['fullname'];
                                       
                                        $email = $row['email'];
                                        $role = $row['role'];                             
                                ?>
                       
<?php } ?>


                        <form action="" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>Username</td>
                                    <td><input type="text" name="username"></td>
                                </tr>
                                <tr>
                                    <td>Fullname</td>
                                    <td><input type="text" name="fullname"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="text" name="password"></td>
                                </tr>
                                
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email"></td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td><input type="text" name="role"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Insert" name="signup"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Remove" name="removeUser"></td>
                                    <td><input type="submit" value="Update" name="updateUser"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
<!-- PHP USER -->
<?php
                                    include ('connect.php');
                                    if(isset($_POST['signup']))
                                    {
                                        $username = $_POST['username'];
                                        $fullname =$_POST['fullname'];
                                        $password = $_POST['password'];
                                        
                                        $email = $_POST['email'];
                                        $role = $_POST['role'];
                                        $sql_addUser = " INSERT INTO `user`(`username`, `fullname`, `password`, `email`, `role`) VALUES ('$username','$fullname','$password','$email','Standard') ";
                                        $signup = mysqli_query($connect,$sql_addUser);
                                        if($signup){
                                            echo"<script>alert('Signup successfully!')</script>";
                                        }
                                        else{
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                				?>
                                <?php
                                    include ('connect.php');
                                    if(isset($_POST['removeUser']))
                                    {
                                        $username = $_POST['username'];
                                        $fullname = $_POST['fullname'];
                                        $password = $_POST['password'];
                                        
                                        $email = $_POST['email'];
                                        $role = $_POST['role'];
                                        $sql_removeUser = " DELETE FROM `user` WHERE username ='$username'";
                                        $removeUser = mysqli_query($connect,$sql_removeUser);
                                        if($removeUser)
                                        {
                                            echo"<script>alert('Remove successfully!')</script>";
                                        }
                                        else {
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                				?>
                                <?php
                                    include ('connect.php');
                                    if(isset($_POST['updateUser']))
                                    {
                                        $username = $_POST['username'];
                                        $fullname = $_POST['fullname'];
                                        $password = $_POST['password'];
                                       
                                        $email = $_POST['email'];
                                        $role = $_POST['role'];
                                        $sql_updateUser = " UPDATE `user` SET `password`='$password',`phone_number`='$phonenumber',`email`='$email',`role`='$role' WHERE username = '$username' ";
                                        $updateUser = mysqli_query($connect,$sql_updateUser);
                                        if($updateUser)
                                        {
                                            echo"<script>alert('Update successfully!')</script>";
                                        }
                                        else {
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                				?>
<!-- PHP USER -->
                <div class="col-lg-3">
                    <div class="song-manage">
                        <h2>SONG</h2>
                        
<!--------------------------------- PHP --------------------------------->
<?php
                                    include('connect.php');
                                    $sql = "Select * from `song`";
                                    $result = mysqli_query($connect, $sql);
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        $song = $row['song'];
                                        $artist = $row['artist'];
                                        $price = $row['price'];  
                                        $file = $row['file'];
                                        $lyric = $row['lyric'];    
                                        $image = $row['image'];                         
                                ?>
                        

<?php } ?>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>Song</td>
                                    <td><input type="text" name="song"></td>
                                </tr>
                                <tr>
                                   <td>Artist</td>
                                   <td>
                                    <select name="artist" id="">
                                        <?php 
                                        $sql = "SELECT * FROM artist";
                                        $result = mysqli_query($connect, $sql);
                                        while($row= mysqli_fetch_array($result)) 
                                        {
                                            $artist = $row['artist'];
                                        
                        
                                        ?>
                                            <option <?php echo "selected=\"selected\"";  ?>> <?php echo $artist ?> </option> 
                                        <?php
                                        }
                                        ?> 
                                    </select>
                                </td>
                                </tr>
                                <tr>
                                    <td>Images</td>
                                    <td><input type="file" name="image"></td>
                                </tr>
                                <tr>
                                    <td>File Audio</td>
                                    <td><input type="file" name="file"></td>
                                </tr>
                                <tr>
                                    <td>Lyric</td>
                                    <td><input type="text" name="lyric"></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="number" min="0" name="price"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Insert" name="addSong"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Remove" name="removeSong"></td>
                                    <td><input type="submit" value="Update" name="updateSong"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <?php
                                    include ('connect.php');
                                    if(isset($_POST['addSong']))
                                    {
                                        $song = $_POST['song'];
                                        $artist = $_POST['artist'];
                                        $price = $_POST['price'];  
                                        $file = $_FILES['file']['name'];
                                        $lyric = $_POST['lyric'];    
                                        $image = $_FILES['image']['name'];   

                                        $images_tmp = $_FILES['image']['tmp_name'];
                                        $files_tmp = $_FILES['file']['tmp_name'];
                                        move_uploaded_file($images_tmp,"$image");  
                                        move_uploaded_file($files_tmp,"audio/$file");  

                                        $sqladdSong= "INSERT INTO `song`(`song`, `artist`, `price`, `file`, `lyric`, `image`) VALUES ('$song','$artist','$price','$file','$lyric','$image')
                                        ";
                                        $addSong = mysqli_query($connect,$sqladdSong);
                                        if($addSong){
                                            echo"<script>alert('Add song successfully!')</script>";
                                        }
                                        else{
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                				?>
                                <?php
                                    include ('connect.php');
                                    if(isset($_POST['updateSong']))
                                    {
                                        $song = $_POST['song'];
                                        $artist = $_POST['artist'];
                                        $price = $_POST['price'];  
                                        $file = $FILES['file'];
                                        $lyric = $_POST['lyric'];    
                                        $image = $_FILES['image'];   
                                        $sql_updateSong = " UPDATE `song` SET `artist`='$artist',`price`='$price',`file`='$file',`lyric`='$lyric',`image`='$image' WHERE song = '$song' ";
                                        $updateSong = mysqli_query($connect,$sql_updateSong);
                                        if($updateSong)
                                        {
                                            echo"<script>alert('Update successfully!')</script>";
                                        }
                                        else {
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                				?>
                                <?php
                                    include ('connect.php');
                                    if(isset($_POST['removeSong']))
                                    {
                                        $song = $_POST['song'];
                                        
                                        $sql_removeSong = " DELETE FROM `song` WHERE song = '$song'";
                                        $removeSong = mysqli_query($connect,$sql_removeSong);
                                        if($removeSong)
                                        {
                                            echo"<script>alert('Remove successfully!')</script>";
                                        }
                                        else {
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                				?>

                <div class="col-lg-3">
                    <div class="artist-manage">
                        <h2>ARTIST</h2>
                        
                        <?php
                                    include('connect.php');
                                    $sql = "Select * from `artist`";
                                    $result = mysqli_query($connect, $sql);
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        $artist = $row['artist'];
                                        $genre = $row['genre'];
                                        $gender = $row['gender'];
                                        $age = $row['age'];
                                        $image = $row['image'];              
                                ?>
                  

<?php } ?>
                        </textarea>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <table>
                                <tr>
                                    <td>Artist</td>
                                    <td><input type="text" name="artist"></td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td><input type="date" name="age"></td>
                                </tr>
                                <tr>
                                    <td>Genre</td>
                                    <td><input type="text" name="genre"></td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><input type="file" name="image"></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><input type="text" name="gender"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Insert" name="addArtist"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Remove" name="removeArtist"></td>
                                    <td><input type="submit" value="Update" name="updateArtist"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                                    include ('connect.php');
                                    if(isset($_POST['addArtist']))
                                    {
                                        $artist = $_POST['artist'];
                                        $genre = $_POST['genre'];
                                        $gender = $_POST['gender'];
                                        $age = $_POST['age'];
                                        $image = $_FILES['image'];
                                        $sql_addArtist = "INSERT INTO `artist`(`artist`, `genre`, `gender`, `age`, `image`) VALUES ('$artist','$genre','$gender','$age','$image') ";
                                        $addArtist = mysqli_query($connect,$sql_addArtist);
                                        if($addArtist){
                                            echo"<script>alert('Add artist successfully!')</script>";
                                        }
                                        else{
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                ?>
                            <?php
                                    include ('connect.php');
                                    if(isset($_POST['updateArtist']))
                                    {
                                        $artist = $_POST['artist'];
                                        $genre = $_POST['genre'];
                                        $gender = $_POST['gender'];
                                        $age = $_POST['age'];
                                        $image = $_FILES['image'];
                                        $sql_addArtist = "UPDATE `artist` SET `genre`='$genre',`gender`='$gender',`age`='$age',`image`='$image' WHERE artist = '$artist'";
                                        $addArtist = mysqli_query($connect,$sql_addArtist);
                                        if($addArtist){
                                            echo"<script>alert('Update artist successfully!')</script>";
                                        }
                                        else{
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                ?>
                            <?php
                                    include ('connect.php');
                                    if(isset($_POST['removeArtist']))
                                    {
                                        $artist = $_POST['artist'];
                                        $genre = $_POST['genre'];
                                        $gender = $_POST['gender'];
                                        $age = $_POST['age'];
                                        $image = $_FILES['image'];
                                        $sql_removeArtist = "DELETE FROM `artist` WHERE artist = '$artist'";
                                        $removeArtist = mysqli_query($connect,$sql_removeArtist);
                                        if($removeArtist){
                                            echo"<script>alert('Remove artist successfully!')</script>";
                                        }
                                        else{
                                            echo"<script>alert('Error!')</script>";
                                        }
                                    }
                ?>

        </div>
    </div>
</body>

</html>