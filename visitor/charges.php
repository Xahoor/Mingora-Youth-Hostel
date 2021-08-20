<?php
	session_start();
	if(!isset($_SESSION["user_email"]) || !isset($_SESSION["user_password"])){
		header("location: ../home.php");
	}
	require '../connection.php';

    $userid = $_SESSION["user_id"];


    $user_data = mysqli_query($conn,"select * from visitors where id = '$userid' ");

    $data = mysqli_fetch_array($user_data);
    
?>


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
    <a class="nav-link image" href="profile.php" role="button" >
          <?php
          if($data['picture'] == ''){ 
          ?>
          <img src="../assets/images/students.jpg" alt="image"><span class="named"> 
          <?php } else{?>
          <img src="../assets/images/<?php echo $data['picture']; ?>" alt="image">

            <?php } ?>
          <span class="named"><?php $un = $data["name"]; 
                    echo strtok($un, " "); ?></span>
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

        <?php

// $check_room=  mysqli_query($conn,"select * from allotte_room where id ='$userid'");
// if(mysqli_num_rows($check_room)>0){
//  $roomdata =  mysqli_fetch_array($check_room);
//  $allotid = $roomdata["id"];

//   $bills= mysqli_query($conn,"select * from bills where aid='$allotid' ORDER BY bid DESC LIMIT 1");
  
//  $billdata = mysqli_fetch_array($bills);

?>
        <!-- <div class="col-md-5">
            <h3> <span><?php //echo $billdata["month"];?>-21</span>: BILL SUMMARY</h3>
            
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
      <td><?php //if($billdata["food"]=="") echo "-"; else echo "Rs,".$billdata["food"]; ?></td>  
    </tr>
    <tr>
      <th scope="row">Electricity</th>
      <td><?php //if($billdata["electricity"]=="") echo "-"; else echo "Rs,".$billdata["electricity"]; ?></td>  
    </tr>
    <tr>
      <th scope="row">Room</th>
      <td><?php //if($billdata["room_charges"]=="") echo "-"; else echo "Rs,".$billdata["room_charges"]; ?></td>  
    </tr>
    <tr>
      <th scope="row">Services Tax</th>
      <td><?php //if($billdata["services_tax"]=="") echo "-"; else echo "Rs,".$billdata["services_tax"]; ?></td>  
    </tr>
    <tr>
      <th scope="row">Arrears</th>
      <td><?php //if($billdata["arrers"]=="") echo "-"; else echo "Rs,".$billdata["arrers"]; ?></td>  
    </tr>
    <tr class="total">
      <th scope="row">Total</th>
      <th scope="row">Rs <?php 
      // $a = (int)$billdata["food"];
      // $b = (int)$billdata["electricity"];
      // $d = (int)$billdata["room_charges"];
      // $e = (int)$billdata["services_tax"];
      // $f = (int)$billdata["arrers"];
      // echo $a+$b+$d+$e+$f;
      ?></th> 
    </tr>

</tbody>



</table>


        </div>

        <?php
// } 
?>

<!- trick start -->

<?php


?>
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
      <td>Rs, 600</td>  
    </tr>
    <tr>
      <th scope="row">Electricity</th>
      <td>Rs, 500</td>  
    </tr>
    <tr>
      <th scope="row">Room</th>
      <td>Rs, 800</td>  
    </tr>
    <tr>
      <th scope="row">Services Tax</th>
      <td>Rs, 500</td>  
    </tr>
    <tr>
      <th scope="row">Arrears</th>
      <td>-</td>  
    </tr>
    <tr class="total">
      <th scope="row">Total</th>
      <th scope="row">Rs 2400</th> 
    </tr>

</tbody>



</table>


        </div>


<!-- trick end -->


        <div class="col-md-5">
            
        <h3>BILL/PAID HISTORY</h3>
            


            <table class="table ">
  
  <tbody>

  <?php

$check_room2=  mysqli_query($conn,"select * from allotte_room where id ='$userid'");
if(mysqli_num_rows($check_room2)>0){
 $roomdata =  mysqli_fetch_array($check_room2);
 $allotid = $roomdata["id"];

 $paid = mysqli_query($conn,"select * from paid where aid='$allotid'");
 if(mysqli_num_rows($paid)>0){

   while($row = mysqli_fetch_array($paid)){
?>
    
    <tr>
      <th scope="row"><?php echo $row["month"]; ?>-21</th>
      <td>Rs, <?php echo $row["amount"]; ?></td>  
    </tr>
    
    <?php
   }
 }

}

?>
<tr>
      <th scope="row">Jan -21/</th>
      <td>Rs, 2300 </td>  
    </tr>

    <tr>
      <th scope="row">Feb -21/</th>
      <td>Rs, 2600 </td>  
    </tr>

</tbody>
</table>

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


<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>
