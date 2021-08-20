<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
		header("location: ../home.php");
	}
	require '../connection.php';
ob_start();
  ?>
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
<script src="../assets/js/jquery.js"></script>


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

  <?php

   $all= mysqli_query($conn,"select * from menu");
    while($m = mysqli_fetch_array($all)){

?>
    
    <tr>
      <th scope="row"><?php echo $m["day"]; ?></th>
      <td><?php echo $m["brakfast"]; ?></td>  
      <td><?php echo $m["lunch"]; ?></td>
      <td><?php echo $m["dinner"]; ?></td>
    
    </tr>

    <?php

    }
?>
  
   




</tbody>

</table>

        </div>

        <div class="col-md-6">
        <p class="weekly-plan">Update Menu Below</p>
<?php
if(isset($_POST["upload_menu"])){
  $s1b = $_POST["s1b"];
  $s1l = $_POST["s1l"];
  $s1d = $_POST["s1d"];
    $m1b = $_POST["m1b"];
    $m1l = $_POST["m1l"];
    $m1d = $_POST["m1d"];
    $t1b = $_POST["t1b"];
    $t1l = $_POST["t1l"];
    $t1d = $_POST["t1d"];
    $w1b = $_POST["w1b"];
    $w1l = $_POST["w1l"];
    $w1d = $_POST["w1d"];
    $t2b = $_POST["t2b"];
    $t2l = $_POST["t2l"];
    $t2d = $_POST["t2d"];
    $f1b = $_POST["f1b"];
    $f1l = $_POST["f1l"];
    $f1d = $_POST["f1d"];
    $s2b = $_POST["s2b"];
    $s2l = $_POST["s2l"];
    $s2d = $_POST["s2d"];
    $sunday = "sunday";
    $monday = "monday";
    $tuesday = "tuesday";
    $wednesday = "wednesday";
    $thursday = "thursday";
    $friday = "friday";
    $saturday = "saturday";

   
    $d1 = mysqli_query($conn,"update menu set brakfast='$s1b', lunch='$s1l', dinner='$s1d' where day='$sunday'");
    $d2 = mysqli_query($conn,"update menu set brakfast='$m1b', lunch='$m1l', dinner='$m1d' where day='$monday'");
    $d3 = mysqli_query($conn,"update menu set brakfast='$t1b', lunch='$t1l', dinner='$t1d' where day='$tuesday'");
    $d4 = mysqli_query($conn,"update menu set brakfast='$w1b', lunch='$w1l', dinner='$w1d' where day='$wednesday'");
    $d5 = mysqli_query($conn,"update menu set brakfast='$t2b', lunch='$t2l', dinner='$t2d' where day='$thursday'");
    $d6 = mysqli_query($conn,"update menu set brakfast='$f1b', lunch='$f1l', dinner='$f1d' where day='$friday'");
    $d7 = mysqli_query($conn,"update menu set brakfast='$s2b', lunch='$s2l', dinner='$s2d' where day='$saturday'");

if($d7){
  header("location: menu.php");
}
else{
  ?>
<script>
  alert("failed");
</script>
  <?php
}


}
?>

        <form action="menu.php" method="post" class="menu-change">
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
      <td> <input type="text" name="s1b" value="Egg+Paratha+Tea"> </td>  
      <td><input type="text" name="s1l" value="pullao"> </td>
      <td><input type="text" name="s1d" value="dal"></td>
    
    </tr>

    <?php

    ?>
    <tr>
      <th scope="row">Monday</th>
      <td><input type="text" name="m1b" value="Eggy Bread + Tea"></td>  
      <td> <input type="text" name="m1l" value="chicken soup"></td>
      <td> <input type="text" name="m1d" value="Beans soup"></td>
    </tr>
    <tr>
      <th scope="row">Tuesday</th>
      <td> <input type="text" name="t1b" value="Egg+Paratha+Tea"></td>  
      <td> <input type="text" name="t1l" value="Beef curry"></td>
      <td><input type="text" name="t1d" value="Biryani"></td>
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      <td><input type="text" name="w1b" value="Egg+Paratha+Tea"></td>   
      <td><input type="text" name="w1l" value="fish fry"></td>
      <td> <input type="text" name="w1d" value="chicken fry"></td>
    </tr>
    <tr>
      <th scope="row">Thursday</th>
      <td><input type="text" name="t2b" value="Egg+Paratha+Tea"></td>  
      <td><input type="text" name="t2l" value="Paya"></td>
      <td><input type="text" name="t2d" value="Haleem"></td>
    </tr>
    <tr>
      <th scope="row">Friday</th>
      <td><input type="text" name="f1b" value="Egg+Paratha+Tea"></td>  
      <td><input type="text" name="f1l" value="Nihari"></td>
      <td><input type="text" name="f1d" value="chicken bbq"></td>
      
    </tr>
    <tr>
      <th scope="row">Saturday</th>
      <td><input type="text" name="s2b" value="Egg+Paratha+Tea"></td>   
      <td><input type="text" name="s2l" value="Kebabs"></td>
      <td><input type="text" name="s2d" value="beef bbq"></td>
    </tr>

   
</tbody>


    




</table>

<div class="form-group menu-btn">
<input type="submit" name="upload_menu" value="Change" id="exampleFormControlInput7">
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
  window.location = "signout.php";
  
} 
})

}
</script>
<!-- this code will stope resubmission of data after refreshing page -->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>