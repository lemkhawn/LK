<?php include('header.php') ?>  
       <!-- Content -->
       <h1> LK ne </h1>
<h2>  LK IS ANGEL<h2>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="slide-banner">
                                            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                                <!-- Slide  -->
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="images/slider/1.png" class="d-block w-100">
                                                    </div>
                                                    <!-- d-block w-100 -->
                                                    <div class="carousel-item">
                                                        <img src="images/slider/5.png" class="d-block w-100">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/slider/SLIDER.png" class="d-block w-100">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/slider/3.png" class="d-block w-100">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/slider/4.png" class="d-block w-100">
                                                    </div>
                                                    
                                                </div>
                                                <!-- Mũi tên next slide -->
                                                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                               <span class="carousel-control-prev-icon">
                                               </span>
                                               </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                               <span class="carousel-control-next-icon">
                                               </span>
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="album">
                                <div class="row ">                             
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
<!--------------------------------- PHP --------------------------------->                                     
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
                                                <a href="song-detail.php?song=<?php echo $song ?>"><button>Buy Now</button></a>
                                            </div>
                                        </div>
                                    </div>                           
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php //include('footer.php') ?> 
