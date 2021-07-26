<?php

session_start();
require 'connection.php';
ob_start();
?>
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
<script src="assets/js/sweetalert.min.js"></script>

<script src="assets/js/jquery.js"></script>





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



@media only screen and (max-width: 500px) {
   
    .navbar-nav .btn{
          text-align: left;
    }

    
   
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

.carousel-item:after {
  content:"";
  display:block;
  position:absolute;
  top:0;
  bottom:0;
  left:0;
  right:0;
  background:rgba(0,0,0,0.5);
}

.carousel-control-prev .carousel-control-prev-icon,.carousel-control-next .carousel-control-next-icon {
    background-color: rgba(0,0,0,.2);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    
    
}

.carousel-caption {
  top: 10%;
  bottom: auto;
  left: 10%;
  right: auto;
  text-align: left;
  
}

.carousel-caption h5{
  color: #eee;
  
}

.carousel-caption h5 span{
  color: #90ee90;
  font-weight: 700;
  border-bottom: 1px solid #90ee90;
}

.carousel-caption .button{

  text-decoration: none;
      margin-top: 20px;
      border: 1px solid #eee;
      background-color: transparent;
      color: #eee;
      border-radius: 5px;
      padding: 5px;
      font-size: 21px;
}


.carousel-caption .button:hover{

      border: 1px solid #eee;
      background-color: #eee;
      color: #333;
     
}

.marginP1{
  margin-top: 5px;
}

</style>
<body class="home">
    



<nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light py-0">
  <a class="navbar-brand mr-5" href="home.php"><img src="assets/images/logo1.png" alt=""></a>
  <!-- <div class=""><button class="">heading</button></div> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    
    <ul class="navbar-nav ml-auto bg-light" id="myDIV">
      <li class="nav-item btn active" id="home">
        <a class="nav-link mr-lg-3" href="#" onclick="myFunction1()">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item btn" >
        <a class="nav-link mr-lg-3" href="#" onclick="myFunction2()">About Us</a>
      </li>
      
      <li class="nav-item btn">
        <a class="nav-link mr-lg-3" href="" type="button" data-toggle="modal" data-target="#signinModal">Login</a>	
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
    <div class="carousel-item active dark-overlay">
      <img src="assets/images/c1.jpg" class="img-fluid tales" alt="...">
      <div class="carousel-caption d-md-block ">
        <h5>Mingora <span> Youth Hostel </span></h5><br>
        <a href="#" class="button" id="rnow" onclick="myFunction3()">Register Now</a>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/c2.jpg" class="d-block w-100 tales" alt="...">
      <div class="carousel-caption  d-md-block">
        <h5>Mingora <span> Youth Hostel </span></h5><br>
        <a href="#" class="button" onclick="myFunction3()">Register Now</a>

      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/c3.jpg" class="d-block w-100 tales" alt="...">
      <div class="carousel-caption d-md-block">
      <h5>Mingora <span> Youth Hostel </span></h5><br>
      <a href="#" class="button" onclick="myFunction3()">Register Now</a>

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

<style>
  #about{
    display: none;
  }
  .location h2{
      text-align: center;
  }

  #about .container-fluid{
    margin-top: 80px;
    height: 300px;
    background-color: #666;
    color: #fff;
  }

  .container-fluid .contact{
    font-size: 25px;
    font-weight: 600;
    padding: 20px;
  }

  .contact span{
    border-bottom: 1px solid #eee;
  }

  footer p{
    line-height: 40px;
    
  }

  .platforms i{
    font-size: 30px;
    margin: 10px 10px;
  }

  .platforms .fa-facebook-square{
    color: #3b5998;
    background-color: #eee;
  }

  .platforms .fa-instagram{
    background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
  }

  .platforms .fa-youtube{
    color: red;
    background-color: #fff;
  }

  .platforms .fa-twitter-square{
    color: #00acee;
    background-color: #fff;
  }

  footer img{
    margin-top: -75px;
    width: 100%;
    height: 300px;
  }

  @media only screen and (max-width: 600px) {
    footer img{
      margin-top: 0px;
    }

    .navbar ul{
      margin-right: auto;
    }
  }
 
</style>


<section id="about" class="margin">

  <div class="container">
      <div class="row">

          <div class="col-md-6">
          <h2>About Hostel</h2>
          <p>
              We are located in the historical heart of beautiful Florence, near to all the touristic monuments, just a step from Signoria Square and less 
              than 1 minute walking to Uffizi Gallery - Old Bridge "Ponte Vecchio" and the Duomo Cathedral "Santa Maria del Fiore".
          </p>
          <p>This make Florence Youth Hostel a great starting point for exploring treasures that Florence has to offer. Forget about spending money on buses 
            and taxis. Everything that you may care to see is within a walking distance from our place
          </p>
          </div>

          <div class="col-md-6 location">
            <h2>Location</h2>
            
            <image src="assets/images/location.jpg" class="map-image"></image>
            


          </div>
      </div>
  </div>
  <footer>
        <div class="container-fluid">
          <div class="row contact"> <span> Contact Us </span></div>
        <div class="row">
            <div class="col-md-4">
            <p><i class="fa fa-phone"></i> 0946-700400 <br> <i class="fa fa-mobile"></i> 0346-955334 <br> <i class="fa fa-mobile"></i> 0344-9356653 <br> 
            <i class="far fa-envelope"></i> myh@gmail.com</p>
            </div>

            <div class="col-md-4 platforms">
            <h4>Follow us</h4>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-twitter-square"></i>
            </div>

            <div class="col-md-4">
                <img src="assets/images/logo1.png" alt="">
            </div>

        </div>
        </div>
  </footer>
</section>

<!-- about us end -->


<style>

  .modal-header{
    border-bottom: none;
  }

  #wrong{
  display: none;
  }
</style>

<!-- login modal start -->

<?php
 if(isset($_POST["login_btn"])){

    $useremail = $_POST['login_email'];
    $userpassword = $_POST['login_password'];

    $check_user = "select * from visitors WHERE email = '$useremail' and password = '$userpassword'";
    $login = mysqli_query($conn,$check_user);
    if(mysqli_num_rows($login)>0){
       header("location: visitor/dashboard.php"); 
    }
    else{
      ?>

      <script>
      
   
      $(document).ready(function() {
        $("#wrong").css("display", "block");
      $("#signinModal").modal("show");
    });

      </script>

      <?php
    }
    

  }
?>
<div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="alert alert-warning" id="wrong">
                <strong>Invalid!</strong> Email or Password.
              </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form class="form" method="post" action="home.php">
  
  
  <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
</div>
<input type="email" class="form-control" placeholder="Email" name="login_email" value="<?php  if(isset($_POST["login_email"])){echo $_POST["login_email"];} ?>" aria-label="Email" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock"></i></span>
</div>
<input type="password" class="form-control" id="mypass" placeholder="Password" name="login_password" value="" aria-label="Username" aria-describedby="basic-addon1">
</div>


<div class="form-check">
    <input type="checkbox" onclick="myPassword()"  class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Show Password</label>
  </div>



<div class="input-group">

<input type="submit" name="login_btn" class="btn btn-primary form-control" href="buyAnsSale/dashbaord.php" value="Login">

</div>




</form>

<p id="marginP1">Login as <a href="" type="button" data-toggle="modal" data-dismiss="modal" data-target="#adminModal">Administrator</a></p>


      </div>
     
    </div>
  </div>
</div>


<style>
  #loogin1{
    text-decoration: none;
    color: white;
    width: 100%;
    background-color: #0275d8;
    padding: 5px;
    text-align: center;
    border-radius: 5px;
  }
</style>

<!-- login modal end -->


<!-- admin login start -->
<!-- ======================== -->

<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      <form class="form" >
  
  
  <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
</div>
<input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock"></i></span>
</div>
<input type="password" class="form-control" id="mypass" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>


<div class="form-check">
    <input type="checkbox" onclick="myPassword()"  class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Show Password</label>
  </div>



<div class="input-group">
<a href="admin/dashboard.php" target="_blank"  id="loogin1">
<!-- <input type="submit" class="btn btn-primary form-control" href="buyAnsSale/dashbaord.php" value="Login"> -->
Login
</a>
</div>




</form>

<p id="marginP1">Login as <a href="" type="button" data-toggle="modal" data-dismiss="modal" data-target="#signinModal">Local</a></p>


      </div>
     
    </div>
  </div>
</div>


<!-- ====================== -->
<!-- admin login end  -->

<!-- registration start -->

<style>
  #register{
    display: none;
    background: url("assets/images/c1.jpg");
    height: 630px;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    -moz-background-imgae: cover;
    -o-background-imgae: cover;
    -webkit-background-imgae: cover;
     width: 100%;
  }


  

@media only screen and (max-width: 500px) {
  #register{


    background-size: cover;
    height: cover;
  }

}

  #register .container{
    padding-top: 20px;
    margin-top: 120px;
    
  }

  .rform{
      background-color: rgba(250,250,250,.5);
      padding: 20px;
      border-radius: 5px;
  }

  #register .form-check{
    color: #fff;
  }

  #register #picture{
    display: none;
  }

  #register #spicture{
    background-color: #fff;
    padding: 5px 10px;
    border: 1px solid #fff;
    border-radius: 5px;

  }

  #register #output{
    margin-left: 20px;
    width: 50px;
    height: 50px;
    padding: 0 ;
    
    
  }
 
</style>


<section id="register" class="reg">

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        

        <?php
         if(isset($_POST["register_btn"])){

        $username = $_POST['name'];
          $useremail = $_POST['email'];
          $userpassword = $_POST['password'];
          $userphone = $_POST['phone'];
          $usercnic = $_POST['cnic'];

          $pname = $_FILES["picture"]["name"];                           
         $basename = pathinfo($pname)['filename'];      
         $basename = $basename.rand();
          $itemp_name = $_FILES["picture"]["tmp_name"];

        

       $extension = strtolower(pathinfo($pname,PATHINFO_EXTENSION));


          

          $check1 = "select email from visitors WHERE email = '$useremail' ";
              $data1 = mysqli_query($conn,$check1);
              $check2 = "select cnic from visitors WHERE cnic = '$usercnic' ";
              $data2 = mysqli_query($conn,$check2);
              if(mysqli_num_rows($data1)>0){
              

            ?>
<script type="text/javascript">
          
          // alert("Sorry you entered email already taken!");
          document.getElementById("carousel").style.display = "none";
          document.getElementById("about").style.display = "none";
          document.getElementById("register").style.display = "block";
</script>
<div class="alert alert-warning">
  <strong>Sorry!</strong> <?php echo $_POST['email']; ?> are already taken.
</div>

            <?php
            }
            else if(mysqli_num_rows($data2)>0){

              ?>
              <script type="text/javascript">
                        
                        alert("Sorry you entered cnic already taken!");
              </script>
              <div class="alert alert-warning">
                <strong>Sorry!</strong> <?php echo $_POST['cnic']; ?> are already taken.
              </div>
              
    <?php
            }
            else{
                $basename = $basename.'.'.$extension;
              if(move_uploaded_file($itemp_name,"assets/images/$basename")){
                $q = "insert into visitors(name,email,password,phone,cnic,picture) 
                values('$username','$useremail','$userpassword','$userphone', '$usercnic','$basename')";
                if( mysqli_query($conn,$q)){
                ?>
                <script>
              alert("Successfully! registered");
                </script>
                <?php
                }
                
              }
              }
            }
          
         
        
        
        ?>

        <form class="rform" id="myform" method="post" action="home.php" enctype="multipart/form-data">
  
        <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
</div>
<input type="text" name="name" class="form-control" placeholder="Full Name"
 value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" aria-describedby="basic-addon1" required>
</div>
  
  <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon2"><i class="fas fa-at"></i></span>
</div>
<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>"
 aria-label="Email" aria-describedby="basic-addon2" required>
</div>


<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon3"><i class="fas fa-unlock"></i></span>
</div>
<input type="password" class="form-control" name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>"
id="mypass2" placeholder="Password" aria-label="Username" aria-describedby="basic-addon3" required>
</div>

<div class="form-check">
    <input type="checkbox" onclick="myPassword()"  class="form-check-input" id="exampleCheck2" >
    <label class="form-check-label" for="exampleCheck2">Show Password</label>
  </div>



  <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon4"><i class="fas fa-phone"></i></span>
</div>
<input type="number" class="form-control" name="phone" placeholder="Phone (0344-377373733)" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>"
aria-label="Username" aria-describedby="basic-addon4" required>
</div>


<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon5"><i class="far fa-credit-card"></i></span>
</div>
<input type="number" class="form-control" name="cnic" placeholder="CNIC" value="<?php if(isset($_POST['cnic'])){echo $_POST['cnic'];} ?>"
aria-label="Username" aria-describedby="basic-addon5" required>
</div>



<div class="input-group mb-3 pictureBorder">

<label for="picture" id="spicture"> <i class="fas fa-image"></i> Select Picture</label>
<input type="file" name="picture" id="picture" accept="image/*" onchange="loadFile(event)" required>
<img id="output"/>
</div>

<div class="input-group">
  
    <input type="submit" name="register_btn" id="form-button-submit" class="btn btn-primary form-control" value="Register">
    
</div>

</form>

        </div>
    </div>
</div>

</section>

<script>
// if ( window.history.replaceState ) {
//   window.history.replaceState( null, null, window.location.href );
// }
</script>


<!-- registration end -->

<script>

var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}



var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<script>

function myPassword() {
  var x = document.getElementById("mypass");
  var y = document.getElementById("mypass2");


  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
 
}

function myFunction1() {
          document.getElementById("about").style.display = "none";
          document.getElementById("register").style.display = "none";
          document.getElementById("carousel").style.display = "block";
          
        }

        function myFunction2() {
          document.getElementById("carousel").style.display = "none";
          document.getElementById("register").style.display = "none";
          document.getElementById("about").style.display = "block";
          
        }

      function myFunction3(){
        document.getElementById("carousel").style.display = "none";
          document.getElementById("about").style.display = "none";
          document.getElementById("register").style.display = "block";
      }
        
</script>

<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>


</body>
</html>