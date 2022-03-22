<?php
include('header.php'); 
$search = "";
if( !empty($_GET['Search'])){
  $search = $_GET['Search'];
}
?>
<div class="container" style="margin-top: 20px">
<div class="row">
    <?php
    if(!empty($search)) {
      $rs = mysqli_query( $connect ,"SELECT * FROM song WHERE song.Song LIKE '%{$search}%' ");
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
                                                    <br> <?php echo"$artist" ?>
                                                </p>
                                                <audio class="ado" controls controlsList="nodownload" ontimeupdate="MyAudio(this)">
                                                    <source src="audio/<?php echo "$file" ?>" type="audio/mpeg">
                                                </audio>
                                                <a href="song-detail.php?Song=<?php echo"$song" ?>"><button>Buy Now</button></a>
            </div>
        </div>
    </div>   
         <?php
     }
    }
    ?>
  </div>
  </div>
  <?php 
  //include('footer.php');
   ?>