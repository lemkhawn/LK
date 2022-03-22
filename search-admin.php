<?php
include('manage.php');
$search = "";
if( !empty($_GET['Search'])){
  $search = $_GET['Search'];
}
?>
<div class="container" style="margin-top: 20px">
<div class="row">
    <?php
    if(!empty($search)) {
      $rs = mysqli_query( $connect ,"SELECT * FROM song WHERE song.Song LIKE '%{$search}%'");
      while($row = mysqli_fetch_assoc($rs)){
        $song = $row['song'];
        $artist = $row['artist'];
        $price = $row['price'];  
        $file = $row['file'];
        $lyric = $row['lyric'];    
       $image = $row['image'];        
    ?>
    <div class="col-xl-2 col-lg-4 col-md-6">
        <div class="box_card" style="width: auto; margin: 15px 10px">
            <img src=" <?php echo "$image" ?>" class="card-img-top">
            <div class="card-body">
                                                <p class="card-text" style="height:72px">
                                                    <b><?php echo "$song" ?></b>
                                                    <br>Artist: <?php echo"$artist" ?>
                                                    <br>File: <?php echo"$file" ?>
                                                    <br>Price: <?php echo"$price" ?>
                                                </p>
            </div>
        </div>
    </div>   
         <?php
     }
    }
    ?>
  </div>
  </div>