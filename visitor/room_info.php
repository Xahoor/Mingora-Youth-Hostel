<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Visit</title>

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
   .room-info h3{
       background-color: #1C6266;
       color: #eee;
       margin-bottom: 0;
       padding: 5px 10px;
       border-radius:  5px 5px 0 0;
   }
   td{
       background-color: #C2F1DB;
       text-align: center;
       color: #666;
       
   }

   th{
    background-color: #C2F1DB;
   }

   .room-info button{
       border: 1px solid #aaa;
       color: #666;
       background-color: #fff;
       font-size: 25px;
       border-radius: 5px;
       padding: 5px 15px;

   }

   .room-info button:hover{
      
       color: #eee;
       background-color: #1C6266;
       border-color: #1C6266;
       transition: 1s;
       

   }

   .modal-body table th,td{
        background-color: #fff;
   }

   .modal-header{
       border-bottom: none;
   }

</style>


<section class="room-info">


    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <h3>About Room</h3>
                    <table class="table table-borderless ">
  
  <tbody>

     <tr>
      <th scope="row">Room No</th>
      <td>3</td>     
    </tr>
    <tr>
      <th scope="row">Type</th>
      <td>Single</td>     
    </tr>
    <tr>
      <th scope="row">Beds</th>
      <td>1</td>     
    </tr>
    <tr>
      <th scope="row">Fan</th>
      <td>No</td>     
    </tr>
    <tr>
      <th scope="row">Room Heater</th>
      <td>Yes</td>     
    </tr>
    <tr>
      <th scope="row">Ac</th>
      <td>Yes</td>     
    </tr>
    <tr>
      <th scope="row">Washroom</th>
      <td>Yes</td>     
    </tr>


    

</tbody>
</table>

<button type="button" data-toggle="modal" data-target="#exampleModal">Reserve</button>

                </div>





                <style>

.gallery img {
  width: 100%;
  height: auto;
}


.responsive {
  
  float: right;
  width: 29.99999%;
   height: auto;
   margin-top: 5px;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

                </style>

                <div class="col-md-8 ">
                    
<h3>Room Pictures</h3>

<div class="responsive">
<div class="gallery">
  <a target="_blank" href="../assets/images/room.jpg">
    <img src="../assets/images/room.jpg"  width="600" >
  </a>
</div>
</div>

<div class="responsive">
<div class="gallery">
  <a target="_blank" href="../assets/images/washroom.jpg">
    <img src="../assets/images/washroom.jpg"  width="600" >
  </a>
</div>
</div>

<div class="responsive">
<div class="gallery">
  <a target="_blank" href="../assets/images/c1.jpg">
    <img src="../assets/images/c1.jpg"  width="600" >
  </a>
</div>
</div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="../assets/images/c3.jpg">
    <img src="../assets/images/c3.jpg"  width="600" >
  </a>
</div>
</div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="../assets/images/c2.jpg">
    <img src="../assets/images/c2.jpg"  width="600" >
  </a>
</div>
</div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="../assets/images/location.jpg">
    <img src="../assets/images/location.jpg"  width="600" >
  </a>
</div>
</div>
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="../assets/images/large.png">
    <img src="../assets/images/large.png"  width="600" >
  </a>
</div>
</div>


                </div>
        </div>

    </div>
</section>




<!-- contact modal -->





<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="row">Call</th>
                    <td>0344337487373</td>
                </tr>
                <tr>
                    <th scope="row">Whatsapp</th>
                    <td>0344337487373</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>online@myh.com</td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




<!-- contact modal end -->
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

<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>