<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYH</title>

    <link rel="icon" type="image/png" sizes="16x16" href="copy/assets/images/favicon-16x16.png">

<link rel="stylesheet" type="text/css" href="assets/fontawsome/css/all.min.css"/>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">



</head>


<style>
nav{
    height: 100px;
    background-color: rgba(0,0,0,.2);
}

nav a{
    font-size: 21px;
}
nav .active a{
    font-weight: 500;
    color: black;
}

.navbar-brand img{
    width: 100px;
    height: 100px;
  
    background-color: red;
   margin-top: -10px;
}


body{
    background-color: red;
}

.margin {
    margin-top: 100px;
   
}


.tales {
  width: 100%;
  height: 650px;
}

.carousel-inner{
  width:100%;
  
}
.carousel-control-prev{
    
}
.carousel-control-prev .carousel-control-prev-icon,.carousel-control-next .carousel-control-next-icon {
    background-color: rgba(0,0,0,.2);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    
    
}


</style>
<body>
    



<nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light py-0">
  <a class="navbar-brand mr-5" href="index.php"><img src="assets/images/logo1.png" alt=""></a>
  <!-- <div class=""><button class="">heading</button></div> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active" id="home">
        <a class="nav-link mr-lg-3" href="#" onclick="myFunction1()">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link mr-lg-3" href="#" onclick="myFunction2()">About Us</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link mr-lg-3" href="#contact-us">Login</a>	
      </li>
    </ul>
    

  </div>
</nav>



<!-- carousel star --> 


<section class="margin" id="carousel">

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/c1.jpg" class="img-fluid tales" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/c2.jpg" class="d-block w-100 tales" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/c3.jpg" class="d-block w-100 tales" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
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

<!-- carousel end --> 

<!-- about us  start -->

<section id="about" class="margin">
about us
</section>

<!-- about us end -->



<script>




function myFunction1() {
          document.getElementById("about").style.display = "none";
        
          document.getElementById("carousel").style.display = "block";
          
        }


        function myFunction2() {
          document.getElementById("carousel").style.display = "none";
          document.getElementById("about").style.display = "block";
          var element = document.getElementById("home");
  element.classList.remove("active");
        }

        

</script>


<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>