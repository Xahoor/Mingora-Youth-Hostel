<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
		header("location: ../home.php");
	}
	require '../connection.php';

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

    

    <li class="nav-item active">
        <a class="nav-link texts" href="bills.php">
         <i class="fas fa-file-invoice-dollar"></i> Bills
        </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link texts" href="menu.php">
         <i class="fas fa-utensils"></i> Menu
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link texts" href="rooms.php">
         <i class="fas fa-bed"></i> Rooms
        </a>
      </li>

      <li class="nav-item dropdown">
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

.bill-btn{
  text-align: right;
}

.bill-btn input{
  border: 1px solid #1c6266;
  padding: 5px 10px;
  background-color: #1c6266;
  color: #eee;
  font-size: 21px;
  border-radius: 5px;
}

.bill-btn input:hover{
  border: 1px solid #666;
  background-color: #fafafa;
  color: #1c6266;
  font-size: 21px;
  border-radius: 5px;
}


#pay{
    margin-top: 20px;
}
#paid,#dues,#create,#report{
    display: none;
    margin-top:20px;
}

</style>

<section id="landing">
  <div class="container"> 
     <div class="row">


     
          <div class="col-md-10">
          <button  onclick="pay()"> <i class="fab fa-cc-amazon-pay"></i> Pay</button>
         <button  onclick="paid()"> <i class="fas fa-money-check-alt"></i> Paid</button>
         <!-- <button  onclick="dues()"> Dues</button> -->
         <button onclick="create()"> <i class="fas fa-receipt"></i> Create</button>
         <!-- <button onclick="report()"> <i class="fas fa-file-invoice"></i> Report</button> -->


         <section id="pay">

<?php

      if(isset($_POST["pay_bill"])){
        echo $cnic = $_POST["pay_cnic"];
        $month = $_POST["pay_month"];
        $amount = $_POST["pay_amount"];

        $id = mysqli_fetch_array(mysqli_query($conn,"select * from visitors where cnic='$cnic'"))["id"];
        $aid = mysqli_fetch_array(mysqli_query($conn,"select * from allotte_room where id='$id'"))["aid"];

      
        if(mysqli_query($conn,"insert into paid(month,amount,aid) values('$month','$amount','$aid')")){
          ?>
<script>
  alert("Bill Paid");
</script>
          <?php
        }
        else{
          ?>
          <script>
            alert("failed Paid");
          </script>
                    <?php
        }
        
      }

?>


         <form action="bills.php" method="post">         
<div class="form-group">
    <label for="exampleFormControlInput1">CNIC</label>
    <input type="number"name="pay_cnic" class="form-control" id="exampleFormControlInput1" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput3">Month</label>
    <input type="text" name="pay_month" class="form-control" id="exampleFormControlInput3" placeholder="Eg: jan, feb, mar, and etc" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput2">Amount</label>
    <input type="number" name="pay_amount" class="form-control" id="exampleFormControlInput2" required>
  </div>  
  <div class="form-group bill-btn">
      <input type="submit" name="pay_bill" value="Pay">
  </div>

</form>
         
         </section>


         <section id="paid">
        
         
         <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Room No</th>
      <th scope="col">Amount</th>
      <th scope="col">Month</th>
    </tr>
  </thead>
  <tbody>
    <?php

$get = mysqli_query($conn,"select * from paid");
$no=1;
while($row = mysqli_fetch_array($get)){
      $aid = $row["aid"];
     $rid= mysqli_fetch_array(mysqli_query($conn,"select * from allotte_room where aid='$aid'"))["rid"];
     $rno= mysqli_fetch_array(mysqli_query($conn,"select * from rooms where rid='$rid'"))["room_no"];
    ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $rno; ?></td>
      <td><?php echo $row["amount"]; ?></td>
      <td><?php echo $row["month"]; ?></td>
    </tr>
    <?php
    $no++;

}
?>
   
  </tbody>
</table>
         </section>


         <!-- <section id="dues"><table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Room No</th>
      <th scope="col">Bed No</th>
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
      <td>@mdo</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Otto</td>
      <td>@fat</td>
      
    </tr>
   
  </tbody>
</table>
         </section> -->

         <section id="create">
           <?php

            if(isset($_POST["create_bill"])){
              $cnic = $_POST["c_cnic"];
              $month = $_POST["month"];
              $food = $_POST["food"];
              $electricity = $_POST["electricity"];
              $room = $_POST["room"];
              $services = $_POST["services"];
              $arrers = $_POST["arrers"];

              
             $id = mysqli_fetch_array(mysqli_query($conn,"select * from visitors where cnic='$cnic'"))["id"];
             $aid = mysqli_fetch_array(mysqli_query($conn,"select * from allotte_room where id='$id'"))["aid"];

             $create_bill = "insert into bills(aid,month,food,electricity,room_charges,services_tax,arrers) values('$aid','$month','$food','$electricity','$room','$services','$arrers')";
             if(mysqli_query($conn,$create_bill)){
               ?>
<script>
  alert("bill created");
</script>
               <?php
             }
             
            }

?>

         <form action="bills.php" method="post">


  <div class="form-group">
    <label for="exampleFormControlInput3">CNIC</label>
    <input type="number" name="c_cnic" class="form-control" id="exampleFormControlInput3" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">Month </label>
    <input type="text" name="month" class="form-control" id="exampleFormControlInput4" placeholder="Eg: jan, feb, mar, and etc" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">Food</label>
    <input type="number" name="food" class="form-control" id="exampleFormControlInput5">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput6">Electricity</label>
    <input type="number" name="electricity" class="form-control" id="exampleFormControlInput6" name="required">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput7">Room</label>
    <input type="number" name="room" class="form-control" id="exampleFormControlInput7" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput8">Services Tax</label>
    <input type="number" name="services" class="form-control" id="exampleFormControlInput8">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput9">Arrers</label>
    <input type="number" name="arrers" class="form-control" id="exampleFormControlInput9">
  </div>
  <div class="form-group bill-btn">
      <input type="submit" name="create_bill" value="Create">
  </div>

</form>
         
         </section>


         <section id="report">
 
         </section>



        </div>



    </div>
</div>
</section>





<script>

function pay() {
          document.getElementById("pay").style.display = "block";
          document.getElementById("paid").style.display = "none";
          // document.getElementById("dues").style.display = "none";
          // document.getElementById("report").style.display = "none";
          document.getElementById("create").style.display = "none";
          
        }


        function paid() {
          document.getElementById("paid").style.display = "block";
          document.getElementById("pay").style.display = "none";
          // document.getElementById("dues").style.display = "none";
          // document.getElementById("report").style.display = "none";
          document.getElementById("create").style.display = "none";
          
        }

        // function dues() {
        //   document.getElementById("dues").style.display = "block";
        //   document.getElementById("pay").style.display = "none";
        //   document.getElementById("paid").style.display = "none";
        //   // document.getElementById("report").style.display = "none";
        //   document.getElementById("create").style.display = "none";
          
        // }

        function create() {
          // document.getElementById("dues").style.display = "none";
          document.getElementById("pay").style.display = "none";
          document.getElementById("paid").style.display = "none";
          // document.getElementById("report").style.display = "none";
          document.getElementById("create").style.display = "block";
          
        }

        // function report() {
        //   document.getElementById("dues").style.display = "none";
        //   document.getElementById("pay").style.display = "none";
        //   document.getElementById("paid").style.display = "none";
        //   document.getElementById("create").style.display = "none";
        //   document.getElementById("report").style.display = "block";
          
        // }



</script>

    


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