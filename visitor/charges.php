<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charges</title>

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

 .total,h3{
     background-color: #1C6266;
     color: #eee;
 }

 h3{
     padding: 8px;
     font-weight: 600;
     
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

    <li class="nav-item ">
        <a class="nav-link texts" href="room.php"><span class="fas fa-bed"></span> My Room
        
      </a>
      </li>
    
    <li class="nav-item active">
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


<section id="chargesInformation">

    
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h3> <span>Mar-21</span>: BILL SUMMARY</h3>
            


            <table class="table ">
  <thead>
    <tr>
      
      <th scope="col">Service Type</th>
      <th scope="col">Charges</th>
      
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">Food</th>
      <td>Rs, 2000</td>  
    </tr>
    <tr>
      <th scope="row">Electricity</th>
      <td>Rs, 200</td>  
    </tr>
    <tr>
      <th scope="row">Room</th>
      <td>Rs, 1500</td>  
    </tr>
    <tr>
      <th scope="row">Services Tax</th>
      <td>Rs, 2000</td>  
    </tr>
    <tr>
      <th scope="row">Arrears</th>
      <td>Rs, 2000</td>  
    </tr>
    <tr class="total">
      <th scope="row">Total</th>
      <th scope="row">Rs 7700</th> 
    </tr>




</tbody>

</table>


        </div>

        <div class="col-md-5">
            
        <h3>BILL/PAID HISTORY</h3>
            


            <table class="table ">
  
  <tbody>

    
    <tr>
      <th scope="row">Feb-21</th>
      <td>Rs, 8000</td>  
    </tr>
    <tr>
      <th scope="row">Jan-21</th>
      <td>Rs 7000</td>  
    </tr>
    <tr>
      <th scope="row">Dec-20</th>
      <td>Rs 7000</td>  
    </tr>
    <tr>
      <th scope="row">Nov-20</th>
      <td>Rs 7000</td>  
    </tr>
    <tr>
      <th scope="row">Oct-20</th>
      <td>Rs 14000</td>  
    </tr>
    <tr>
      <th scope="row">Aug-20</th>
      <td>Rs 7000</td>  
    </tr>
    <tr>
      <th scope="row">Jul-20</th>
      <td>Rs 6000</td>  
    </tr>


</tbody>
</table>

        </div>
    </div>
</div>


</section>






<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>
