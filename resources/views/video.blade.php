<div class="basic-3" style="padding-top:0rem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>¡Un video hecho para ti!</h2>
            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Video Preview -->
                <div class="image-container" style="cursor:pointer">
                    <div class="video-wrapper"><!--OJO QUE SE CAMBIA EL /EMBED-->
                        <a class="popup-youtube video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/pK060iUFWXg" data-target="#myModal" data-effect="fadeIn">
                            <img class="img-fluid" src="./assets/images/video-frame.svg" alt="alternative">
                            <span class="video-play-button">
                                <span></span>
                            </span>
                        </a>
                    </div>
                    <!-- end of video-wrapper -->
                </div>
                <!-- end of image-container -->
                <!-- end of video preview -->

                <p>¿Solicitar ayuda para tu hogar alguna vez fue tan rápido y fácil? Más que esto, <strong>¡no lo creo!</strong>
                <br>
                ¿No nos crees? Ponnos a prueba
                <br><br>
                <a class="btn-solid-lg page-scroll" href="#services">SOLICITAR</a>

                </p>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                        
                        <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>        
                            <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                            
                            
                        </div>

                        </div>
                    </div>
                </div> 

            </div>
            <!-- end of col -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->
</div>
<!-- end of basic-3 -->
<script>
    $(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);

    
    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function (e) {
        
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
    

    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    }) 

    // document ready  
    });
</script>
<style>
    .modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
video-btn{
    cursor:pointer;
}
</style>
