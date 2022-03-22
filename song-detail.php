<?php include('header.php');?>
<!-- Content -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="album">
                                <div class="row ">   
                                    <div class="col-xl-4">

                                    </div>
                                    <div class="col-xl-4">
                                        <div class="detail">
<!--------------------------------- PHP --------------------------------->
                                        <?php
                                            include('connect.php');
                                            $song = $_GET["song"];
                                            $sql = "SELECT * FROM song where song = '$song'";
                                            $result = mysqli_query($connect, $sql);
                                            while($row =mysqli_fetch_assoc($result)) 
                                            {
                                                $song = $row['song'];
                                                $artist = $row['artist'];
                                                $price = $row['price'];  
                                                $file = $row['file'];
                                                $lyric = $row['lyric'];    
                                                $image = $row['image'];                                            
                                        ?>              
                                            <div class="images-detail">
                                                <img src="<?php echo"$image"?>">
                                                <audio class="ado" controls>
                                                    <source src="audio/<?php echo "$file" ?>" type="audio/mpeg">
                                                </audio>                                            
                                            </div>
                                            <div class="body-detail">
                                                <h4><?php echo"$song" ?></h4>
                                                <h5>Artist: <?php echo"$artist" ?></h5>
                                                <textarea cols="54" rows="10" disabled><?php echo"$lyric" ?></textarea>
                                            </div>
                                        <?php } ?>
<!--------------------------------- PHP --------------------------------->  
                                        </div>
                                    </div>
                                    <div class="col-xl-4">

                                    </div>                          
                                </div>
                            </div>
                        </div>
                    </div>                    
                                    
    <!-- Footer -->
    <?php //include('footer.php');?>