<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
        <a class="nav-link image" href="profile.php" role="button" >
          <img src="../assets/images/obaid.jpg" alt="image"><span class="named">Obaid</span>
        </a>
    </li>

    <li class="nav-item">
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

<style>
#landing{
  margin-top: 10px;
}
.time,.open{
  background-color: #1C6266;
  padding: 10px;
  color: #eee;
  font-weight: 600;
  font-size: 21px;
}

.time{
  border-radius: 5px 0 0 5px;
}

.open{
  border-radius: 0 5px 5px 0;
  color: #C2F1DB;
}

#landing .row:nth-child(2){
  margin-top: 20px;
}

#landing .row:nth-child(2) button{
  border: 1px solid #bababa;
  background-color: #fafafa;
  padding: 5px 10px;
  font-size: 21px;
  border-radius: 5px;
  color: #1C6266;
}

#landing .row:nth-child(2) button:hover{
  background-color: #1c6266;
  color: #fafafa;
  border-color: #1c6266;
  transition: 1s;
}

#availrooms,#menu{
  margin-top: 20px;

}

#availrooms img{
        width: 100%;
        height: 500px;
}

#menu,#complained{
  display: none;
}

#availrooms a{
  text-decoration: none;

}



#availrooms .carousel-inner h5 span{
  color: white;
  background-color: rgba(0,0,0,.4);
  padding: 5px;
  border-radius: 5px;
}

.complain{
  border:1px solid  #ccc;
  margin-top: 10px;
  border-radius: 3px;
  padding: 10px;
}
.complain-btn{
  text-align: right;
}

.complain-btn input{
  border: 1px solid #1c6266;
  padding: 5px 10px;
  background-color: #1c6266;
  color: #eee;
  font-size: 21px;
  border-radius: 5px;
}

.complain-btn input:hover{
  border: 1px solid #666;
  background-color: #fafafa;
  color: #1c6266;
  font-size: 21px;
  border-radius: 5px;
}
</style>
<section id="landing">

  <div class="container"> 
    
    <div class="row">
    <p><span class="time">Timming</span><span class="open"> Open 24/7</span></p>
    </div>

      <div class="row">
     
          <div class="col-md-8">
             
         <button onclick="myRooms()">Available Rooms</button>
         <button onclick="myMenu()"> <i class="fas fa-utensils"></i> Menu</button>
         <button onclick="myComplain()"> <i class="fas fa-comments"></i> Complain</button>
         

<section id="availrooms"> <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active dark-overlay">
      <a href="room_info.php">
      <img src="../assets/images/room.jpg" class="img-fluid tales" alt="...">
      <div class="carousel-caption d-md-block ">
        <h5><span>Room No 3</span> </h5><br>
      </div></a> 
    </div>

    <div class="carousel-item">
      <!-- <img src="../assets/images/washroom.jpg" class="d-block w-100 tales" alt="..."> -->

      <a href="room_info.php">
      <img src="../assets/images/washroom.jpg" class="img-fluid tales" alt="...">
      <div class="carousel-caption d-md-block ">
        <h5><span>Room No 8</span> </h5><br>
      </div></a> 
      
    </div>
   
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></section>


<section id="menu"> <table class="table ">
  <thead>
    <tr>
      <th></th>
      <th scope="col">Breakfast</th>
      <th scope="col">Lunch</th>
      <th scope="col">Dinner</th>
      
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">Sunday</th>
      <td>Egg+Paratha+Tea</td>  
      <td>pullao</td>
      <td>Dal</td>
    
    </tr>
    <tr>
      <th scope="row">Monday</th>
      <td>Eggy Bread + Tea</td>  
      <td>chicken soup</td>
      <td>Beans soup</td>
    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td>Egg+Paratha+Tea</td>  
      <td>Beef curry</td>
      <td>Biryani</td>
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td>Egg+Paratha+Tea</td>   
      <td>fish fry</td>
      <td>chicken fry</td>
    </tr>
    <tr>
      <th scope="row">Thursday</th>
      <td>Egg+Paratha+Tea</td>  
      <td>Paya</td>
      <td>Haleem</td>
    </tr>
    <tr>
      <th scope="row">Friday</th>
      <td>Egg+Paratha+Tea</td>  
      <td>Nihari</td>
      <td>chicken bbq</td>
      
    </tr>
    <tr>
      <th scope="row">Saturday</th>
      <td>Egg+Paratha+Tea</td>   
      <td>Kebabs</td>
      <td>beef bbq</td>
    </tr>
    




</tbody>

</table></section>

<section  id="complained" class="complain">
<form action="">

<div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" class="form-control" id="exampleFormControlInput1">
  </div>

  <div class="form-group">
  <label for="exampleFormControlTextarea1"> textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="form-group complain-btn">
      <input type="submit" value="Send">
  </div>

</form>

</section>

          </div>  



          <style>
              .announce h3{
                  text-align: center;
                  background-color: #1c6266;
                  color: #eee;
                  padding: 5px 10px;
                  border-radius: 2px;
                  margin-bottom: 0;
                  
              }

              /* #C2F1DB */

              .announce-body{
                height: 520px;
                background-color: #C2F1DB;
                color: #666;
                overflow-y: auto;
              }

              .announce-body p{
                margin-left: 5px;
              }

              .announce-body p span{
                font-size: 10px;
                color: #f90000;
              }
          </style>
        <div class="col-md-4 announce">
          <h3>Announcements</h3>
          <div class="announce-body">
              
              <p> <span>[ 12 sep ]</span>: Junaid got first poisition in oxford <hr> </p>

              <p> <span>[ 21 Jul ]</span>:Junaid got first poisition in oxford <hr> </p>

              <p> <span>[02 May]</span>: Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford <hr> </p>
              <p> <span>[ 01 May ]</span>: Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford 
              Junaid got first poisition in oxford Junaid got first poisition in oxford Junaid got first poisition in oxford <hr> </p>
              
          </div>
        </div>
      </div>
  </div>
</section>



<script>

  function sweet(){

    Swal.fire({
  title: 'Do you want to logout?',
  showDenyButton: true,
  confirmButtonText: `Yes`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location = "../home.php";
    
  } 
})

  }
</script>

<script>
  function myRooms() {
          document.getElementById("availrooms").style.display = "block";
          document.getElementById("menu").style.display = "none";
          document.getElementById("complained").style.display = "none";
          
        }

        function myMenu() {
          document.getElementById("availrooms").style.display = "none";
          document.getElementById("complained").style.display = "none";
          document.getElementById("menu").style.display = "block";
          
        }

        function myComplain() {
          document.getElementById("availrooms").style.display = "none";
          document.getElementById("complained").style.display = "block";
          document.getElementById("menu").style.display = "none";
          
        }

</script>

<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>