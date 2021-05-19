<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bills</title>

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
  font-size: 19px;
  
}

nav li a.nav-link{
    border: 1px solid #eee;
    background-color: #eee;
    border-radius: 8px;
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

    

    <li class="nav-item ">
        <a class="nav-link texts" href="bills.php">
         <i class="fas fa-file-invoice-dollar"></i> Bills
        </a>
      </li>


      <li class="nav-item ">
        <a class="nav-link texts" href="menu.php">
         <i class="fas fa-utensils"></i> Menu
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link texts" href="rooms.php">
         <i class="fas fa-bed"></i> Rooms
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link texts" href="users.php">
        <i class="fas fa-users"></i> Users
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
  margin-top: 20px;
}

#landing  button{
  border: 1px solid #bababa;
  background-color: #fafafa;
  padding: 5px 10px;
  font-size: 21px;
  border-radius: 5px;
  color: #1C6266;
}

#landing  button:hover{
  background-color: #1c6266;
  color: #fafafa;
  border-color: #1c6266;
  transition: 1s;
}


#guests,#registered{
    margin-top: 20px;
}

#registered{display: none;}
</style>
<section id="landing">
  <div class="container"> 
     <div class="row">


     
          <div class="col-md-10">
          <button  onclick="guests()"> <i class="fas fa-suitcase-rolling"></i> Guest</button>
         <button  onclick="registered()"> <i class="fas fa-registered"></i></i> Registered</button>
         
         <section id="guests"><table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Room No</th>
      <th scope="col">Bed No</th>
      <th scope="col">In date</th>
      <th scope="col">Contact No</th>
      <th scope="col">CNIC</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Khan </td>
      <td>4</td>
      <td>NA</td>
      <td>24/jan/2021</td>
      <td>0348732838932</td>
      <td>15607623782387872</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ali </td>
      <td>7</td>
      <td>2</td>
      <td>07/feb/2021</td>
      <td>0348732838932</td>
      <td>15607623782387872</td>
      
    </tr>
   
  </tbody>
</table></section>


<section id="registered"><table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">CNIC</th>
    
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Khan </td>
      <td>khan123@gmail.com</td>
      <td>0348732838932</td>
      <td>15607623782387872</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ali </td>
      <td>ali@gmail.com</td>
      <td>0348732838932</td>
      <td>15607623782387872</td>
      
    </tr>
   
  </tbody>
</table></section>



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

function guests() {
         
          document.getElementById("guests").style.display = "block";
          document.getElementById("registered").style.display = "none";
          
        }

        function registered() {
          
          document.getElementById("guests").style.display = "none";
          document.getElementById("registered").style.display = "block";
          
        }
</script>

<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>