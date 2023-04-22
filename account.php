<?php 
//start the session
SESSION_START();

//Check if the session variables are set 
//this to check if the account is already login or not
if (isset($_SESSION['ses_username']) === false){
    header("Location: index.php?logfirst"); 

} elseif (isset($_REQUEST['logout']) === true){
    session_destroy();
    header("Location: index.php?logout");
}


 ?>
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Portfolio Page</title>

                                <link href='css/bootstrap.min.css' rel='stylesheet'>

                                <script type='text/javascript' src='js/jquery.min.js'></script>

                                <style>.profile-head {
    transform: translateY(5rem)
}
.cover {
    background-image: url('images/sunset.jpg');
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #2FA38E;
    background: linear-gradient(to right, #BEF197, #5EC2B0);
    min-height: 100vh;
    overflow-x: hidden
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="images/mypicture.jpg" alt="..." width="150" class="rounded mb-2 img-thumbnail">

                        <a href="?logout" class="btn btn-outline-dark btn-sm btn-block">Sign Out</a>


                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"> <?php echo $_SESSION['ses_fullname']; ?> </h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i> <?php echo $_SESSION['ses_address']; ?>
                         </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">920</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">8,956</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">50</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>

            <div class="px-4 py-3">
                <h5 class="font-family: 'Poppins', sans-serif;">Expertise </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-family: 'Poppins', sans-serif; mb-0">Mobile Photographer</p>
                    <p class="font-family: 'Poppins', sans-serif; mb-0">Mobile Videographer</p>
                    <p class="font-family: 'Poppins', sans-serif; mb-0">Film Editor</p>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent Captures</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="images/shot 1.jpg" alt="" class="img-fluid rounded shadow-sm"></div>              
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="images/shot 4.jpg" alt="" class="img-fluid rounded shadow-sm"></div>                
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="images/shot 3.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="images/shot 2.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                </div> 
            </div>

            <div class="px-4 py-3">
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-family: 'Poppins', sans-serif; mb-0">All Rights Reserved. Copyright 2023</p>
                </div>
            </div>



        </div>
    </div>
</div>
                                <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
                                </body>
                            </html>