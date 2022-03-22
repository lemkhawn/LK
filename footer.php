    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="play-music">
                        <button><i class="fa fa-random"></i></button>
                        <button><i class="fa fa-arrow-left"></i></button>
                        <button><span><i class="fas fa-play-circle"></i></span></button>
                        <button><i class="fa fa-arrow-right"></i></button>
                        <button><i class="fa fa-redo"></i></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3">
                  
                </div> 
            </div>
        </div>
    </footer>

<script type="text/javascript">
    function MyAudio(event){
    if(event.currentTime>15){
    event.currentTime=0;
    event.pause();
    alert("Buy Premium")
    }
    }

    var alertList = document.querySelectorAll('alert')
    var alerts =  [].slice.call(alertList).map(function MyAudio(event) {
    return new bootstrap.Alert(MyAudio)
})
</script>
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
    })
</script>


</body>

</html>