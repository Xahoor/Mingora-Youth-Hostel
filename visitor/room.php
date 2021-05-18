<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Room</title>

    <link rel="icon" type="image/png" sizes="16x16" href="copy/assets/images/favicon-16x16.png">

<link rel="stylesheet" type="text/css" href="../assets/fontawsome/css/all.min.css"/>

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">


<style>
     /* navbar css start */ 
  nav{
    height: 100px;
    background-color: rgba(0,0,0,.2);
}

nav li {
  margin-left: 20px;
}

nav li .texts{
  margin-top: 10px;
}
.navbar-brand img{
  width: 180px;

}

.image img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.image span{
  margin-left: 5px;
}

.image:hover{
  
  background-color: #fff;
}

  /* navbar css end */ 

  .content {
    margin-right: auto;
    margin-left: auto;
    padding: 0 30px 10px;
}

  .cardbox {
    background-color: #1C6266;
    border: 1px solid #1C6266;
    color: rgba(255,255,255,0.8);
    cursor: pointer;
    height: 120px;
}

.cardbox a{
    color: rgba(255,255,255,0.8);
  text-decoration: none;
}

.cardbox:hover{
  background-color: rgba(0,0,0,.5);
  border: 1px solid #eee;
  color: #000;
  transition: 1s;
}

.cardbox:hover a{
  color: #fff;
}

.panel-body {
    padding: 15px;
}

.statistic-box h2 {
    float: right;
    margin: 0;
    font-size: 50px;
    font-weight: 700;
}

.roomPicture img{
        width: 100%;
        height: 500px;
}


</style>

</head>

<body>




<nav class="navbar navbar-expand-lg navbar-light bg-light header-page">
  <a class="navbar-brand" href="dashboard.php"><img src="../assets/images/large.png" alt=""></a>
  <button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link image " href="profile.php" role="button" >
        
          <img src="../assets/images/obaid.jpg" alt="image"><span class="named">Obaid</span>
          
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link texts" href="room.php"><span class="fas fa-bed"></span> My Room
        
      </a>
      </li>
    
    <li class="nav-item">
        <a class="nav-link texts" href="charges.php"><span class="fas fa-money-bill"></span> Charges
        
      </a>
      </li>

      <li class="nav-item">
        <a class="nav-link sign-out texts" onclick="sweet()"  ><span class="fas fa-sign-out-alt"></span> Log Out
        
</a>
      </li>


      
    </ul>
  </div>
</nav>


<section id="roomInformation">

    <div class="container">
        <div class="row content">

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd cardbox">
                              <a href="">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number">15</span>
                                        </h2>
                                    </div>
                                    <div class="items pull-left">
                                    <i class="fas fa-border-style fa-2x"></i>
                                        <h4>Room No</h4>
                                    </div>
                                </div>
                              </a>
                            </div>
                        </div>


        <div class="col-md-1"></div>
        <div class="col-md-8 roomPicture">
                            
            



        <section class="margin" id="carousel">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active dark-overlay">
      <img src="../assets/images/room.jpg" class="img-fluid tales" alt="...">
     
        
    </div>
    <div class="carousel-item">
      <img src="../assets/images/washroom.jpg" class="d-block w-100 tales" alt="...">
      
    </div>
   
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</section>



        </div>

        </div>
    </div>

</section>


<section>



</section>






<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>
