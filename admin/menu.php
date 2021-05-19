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


      <li class="nav-item active">
        <a class="nav-link texts" href="menu.php">
         <i class="fas fa-utensils"></i> Menu
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link texts" href="rooms.php">
         <i class="fas fa-bed"></i> Rooms
        </a>
      </li>

      <li class="nav-item ">
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

.menu-change table{
    width: 100%;
}

.weekly-plan{
    background-color: #1c6266;
    color: #eee;
    border: 1px solid #1c6266;
    padding: 5px 10px;
    border-radius: 5px 5px 0 0;
}

.menu-btn{
    text-align: right;
}

.menu-btn input{
    border: 1px solid #1c6266;
    color: #eee;
    background-color: #1c6266;
    padding: 5px 10px;
    border-radius: 5px;
}
</style>

<section id="landing">
  <div class="container-fluid"> 
     <div class="row">


     
          <div class="col-md-6">
        
        <p class="weekly-plan">Weekly Menu</p>    
 <table class="table table-bordered">
  <thead>
    <tr>
      <th>Day</th>
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

</table>

        </div>

        <div class="col-md-6">
        <p class="weekly-plan">Update Menu Below</p>


        <form action="" class="menu-change">
        <table class="table table-bordered">
  <thead>
    <tr>
      <th>Day</th>
      <th scope="col">Breakfast</th>
      <th scope="col">Lunch</th>
      <th scope="col">Dinner</th>
      
    </tr>
  </thead>
  <tbody>

    
    <tr>
      <th scope="row">Sunday</th>
      <td> <input type="text" value="Egg+Paratha+Tea"> </td>  
      <td><input type="text" value="pullao"> </td>
      <td><input type="text" value="dal"></td>
    
    </tr>
    <tr>
      <th scope="row">Monday</th>
      <td><input type="text" value="Eggy Bread + Tea"></td>  
      <td> <input type="text" value="chicken soup"></td>
      <td> <input type="text" value="Beans soup"></td>
    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td> <input type="text" value="Egg+Paratha+Tea"></td>  
      <td> <input type="text" value="Beef curry"></td>
      <td><input type="text" value="Biryani"></td>
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td><input type="text" value="Egg+Paratha+Tea"></td>   
      <td><input type="text" value="fish fry"></td>
      <td> <input type="text" value="chicken fry"></td>
    </tr>
    <tr>
      <th scope="row">Thursday</th>
      <td><input type="text" value="Egg+Paratha+Tea"></td>  
      <td><input type="text" value="Paya"></td>
      <td><input type="text" value="Haleem"></td>
    </tr>
    <tr>
      <th scope="row">Friday</th>
      <td><input type="text" value="Egg+Paratha+Tea"></td>  
      <td><input type="text" value="Nihari"></td>
      <td><input type="text" value="chicken bbq"></td>
      
    </tr>
    <tr>
      <th scope="row">Saturday</th>
      <td><input type="text" value="Egg+Paratha+Tea"></td>   
      <td><input type="text" value="Kebabs"></td>
      <td><input type="text" value="beef bbq"></td>
    </tr>

   
</tbody>


    




</table>

<div class="form-group menu-btn">
<input type="submit" value="Change" id="exampleFormControlInput7">
</div>

</form>
        
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

<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>