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
    <title>Rooms</title>

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


      <li class="nav-item ">
        <a class="nav-link texts" href="menu.php">
         <i class="fas fa-utensils"></i> Menu
        </a>
      </li>

      <li class="nav-item active">
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

#landing{
  margin-top: 20px;
}

#landing .col-md-5{
  position: sticky;
}

#landing  button{
  margin-top: 5px;
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


#allot,#reserved,#add,#deallot{
  margin-top: 20px;
}

#reserved,#add,#deallot{
  display:  none;
}


.room-btn{
  text-align: right;
}

.room-btn input{
  border: 1px solid #1c6266;
  padding: 5px 10px;
  background-color: #1c6266;
  color: #eee;
  font-size: 21px;
  border-radius: 5px;
}

.room-btn input:hover{
  border: 1px solid #666;
  background-color: #fafafa;
  color: #1c6266;
  font-size: 21px;
  border-radius: 5px;
}





#photo1,#photo2,#photo3,#photo4,#photo5,#photo6{
        display: none;;
    }
    .groupPhoto{
        
        
    }
  
     

    img{
        width: 90px; 
        height: 90px;
       margin-left: 5px;
       margin-right: 5px;

    }
    #photoLabel1{
        
    }
  #photoLabel1 i,#photoLabel2 i,#photoLabel3 i,#photoLabel4 i,#photoLabel5 i,#photoLabel6 i{
      position: absolute;
      margin-left:-90px;
  }

  .float{
    font-size: 21px;
    background-color: #1C6266;
    color: #eee;
    border: 1px solid #1C6266;
    padding: 5px 10px;
    border-radius: 5px 5px 0 0;
  }


</style>

<section id="landing">

  <div class="container"> 
    


      <div class="row">
     
          <div class="col-md-5">
             
         <button onclick="allot()"> <i class="fas fa-key"></i> Check In</button>
         <button onclick="deallot()">Check Out</button>
         <button onclick="reserved()"> <i class="fas fa-door-closed"></i> Reserved</button>
         <button onclick="add()"> <i class="fas fa-plus"></i> Add Room</button>

        <section id="allot" class="">
          <?php

            if(isset($_POST["allot_room"])){
              $cnic = $_POST["allot_cnic"];
              $room = $_POST["allot_roomno"];

             $uid= mysqli_fetch_array(mysqli_query($conn,"select * from visitors where cnic ='$cnic'"))["id"];
             $rid= mysqli_fetch_array(mysqli_query($conn,"select * from rooms where room_no ='$room'"))["rid"];
             
             if(empty($uid)){
               ?>
<script>
  alert("A user does not exist");
</script>
               <?php
             }

             else if(empty($rid)){
              ?>
<script>
 alert("A room does not exist");
</script>
              <?php
            }

             $check1 =mysqli_query($conn,"select * from allotte_room where id='$uid'");
             $check2 =mysqli_query($conn,"select * from allotte_room where rid='$rid'");

             if(mysqli_num_rows($check1)>0){
               ?>
<script>
  alert("sorry! a user already reserved room");
</script>
               <?php
             }

             else if(mysqli_num_rows($check2)>0){
              ?>
              <script>
                alert("sorry! This room is already reserved");
              </script>
                             <?php
                           }

                           else{

                            $date = date("y/m/d");
                            $insert = mysqli_query($conn,"insert into allotte_room(id,date,rid) value('$uid','$date','$rid')");
                            if($insert){
                              ?>
<script>

  alert("Success");
</script>

<?php
                            }
                           }
             }

             

            
          ?>

        <form action="rooms.php" method="post">

        <div class="form-group">
    <label for="exampleFormControlInput1">Guest CNIC</label>
    <input type="number" name="allot_cnic" class="form-control" id="exampleFormControlInput1" required>
  </div>

<div class="form-group">
    <label for="exampleFormControlInput5">Room No</label>
    <input type="number" name="allot_roomno" class="form-control" id="exampleFormControlInput5" required>
  </div>

  
  <div class="form-group room-btn">
      <input type="submit" name="allot_room" value="Allot">
  </div>

</form>
        </section>


        <section id="deallot" class="">
<?php

              if(isset($_POST["get_room"])){
                $cnic = $_POST["g_cnic"];
                $room = $_POST["g_room"];

                $uid= mysqli_fetch_array(mysqli_query($conn,"select * from visitors where cnic ='$cnic'"))["id"];
             $rid= mysqli_fetch_array(mysqli_query($conn,"select * from rooms where room_no ='$room'"))["rid"];

             if(!empty($uid) && !empty($rid)){
               $q= mysqli_query($conn,"delete from allotte_room where id='$uid' and rid='$rid'");
               if($q){
                 ?>
<script>
  alert("Room is de allocated");
</script>
                 <?php
               }
             }

              }

?>


        <form action="rooms.php" method="post">

        <div class="form-group">
    <label for="exampleFormControlInput1">Guest CNIC</label>
    <input type="number" name="g_cnic" class="form-control" id="exampleFormControlInput1" required>
  </div>

<div class="form-group">
    <label for="exampleFormControlInput5">Room No</label>
    <input type="number" name="g_room" class="form-control" id="exampleFormControlInput5" required>
  </div>

  

  <div class="form-group room-btn">
      <input type="submit" name="get_room" value="Check Out">
  </div>

</form>
        </section>


        <section id="reserved">
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Room No</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>

  
  <tbody>
    <?php

            $res = mysqli_query($conn,"select * from allotte_room");
            $serial=1;
            while($getr = mysqli_fetch_array($res)){
                $id = $getr["id"];
                $date = $getr["date"];
                $roomid = $getr["rid"];

               $name= mysqli_fetch_array(mysqli_query($conn,"select * from visitors where id='$id'"))["name"];
               $room_id= mysqli_fetch_array(mysqli_query($conn,"select * from rooms where rid='$roomid'"))["room_no"];


            
    ?>
    <tr>
      <th scope="row"><?php echo $serial; ?></th>
      <td><?php echo $name; ?></td>
      <td><?php echo $room_id; ?></td>
      <td><?php echo $date; ?></td>
      
    </tr>

    <?php
    $serial++;
}
    ?>
 
   
  </tbody>
</table>
        </section>

        <section id="add">
<?php

      if(isset($_POST["add_room"])){

         $no =$_POST["room_no"];
        $type =$_POST["type"];
        $beds =$_POST["beds"];
        $fan =$_POST["fan"];
        $heater =$_POST["heater"];
        $ac =$_POST["ac"];
  
         $rid = rand(1,999);
        $pname = $_FILES["picture"]["name"];
           
        $basename = pathinfo($pname)['filename'];
       $basename = $basename.rand();   
        $itemp_name = $_FILES["picture"]["tmp_name"];
      $extension = strtolower(pathinfo($pname,PATHINFO_EXTENSION));

      $basename = $basename.".".$extension;
      if(move_uploaded_file($itemp_name,"../assets/images/$basename")){
        $insert = "insert into room_pictures(rid,picture) value('$rid','$basename')";
          if( mysqli_query($conn,$insert)){

          }
          $upload2 =mysqli_query($conn,"insert into rooms(rid,room_no,total_bed,fan,heater,ac) values('$rid','$no','$beds','$fan','$heater','$ac')");
          
          if($upload2){
            
          }


         
          }



      }

?>

        <form action="rooms.php" method="post" enctype="multipart/form-data">



<div class="form-group">
<label for="exampleFormControlInput7">Room No</label>
<input type="number" name="room_no" class="form-control" id="exampleFormControlInput7" required>
</div>

<div class="form-group">
<label for="exampleFormControlInput6">Type (optional)</label>
<input type="text" name="type" class="form-control" id="exampleFormControlInput6" placeholder="Eg: (single, double, and other)" >
</div>

<div class="form-group">
<label for="exampleFormControlInput8">Total Beds</label>
<input type="number" name="beds" class="form-control" id="exampleFormControlInput8" required>
</div>

<div class="form-group">
<label for="exampleFormControlInput9">Fan </label>
<input type="text" name="fan" class="form-control" id="exampleFormControlInput9" placeholder="Eg: (Yes or No)" required>
</div>

<div class="form-group">
<label for="exampleFormControlInput10">Room Heater </label>
<input type="text" name="heater" class="form-control" id="exampleFormControlInput10" placeholder="Eg: (Yes or No)" required>
</div>

<div class="form-group">
<label for="exampleFormControlInput11">AC </label>
<input type="text" name="ac" class="form-control" id="exampleFormControlInput11" placeholder="Eg: (Yes or No)" required>
</div>


<div class="form-group groupPhoto">
                                                <p>Upload Picture (max 2)</p>
<div class="form-group">

                                               
                                                    <label for="photo1" id="photoLabel1"> 
                                                  <img src="../assets/images/placeholder.png" id="output1" alt=""> <i class="fa fa-camera"></i> </label>
                                                    <input type="file" name="picture" id="photo1" accept="image/*" onchange="loadFile(event)"required>

                                                                                                      
                                                    <label for="photo2" id="photoLabel2"> 
                                                    <img src="../assets/images/placeholder.png" id="output2" alt="">  <i class="fa fa-camera"></i> </label>
                                                    <input type="file" id="photo2" accept="image/*" onchange="loadFile2(event)">

                                              
                                                 
                                                    
                                                    

</div>
</div>


<div class="form-group room-btn">
<input type="submit"name="add_room" value="Add Room">
</div>

</form>

        </section>

         </div>



        <div class="col-md-7">
         <p class="float"> <span class="room-type"> Available Rooms </span></p>
        
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Room No</th>
      <th scope="col">Beds </th>
      <th scope="col">Fan</th>
      <th scope="col">Heater</th>
      <th scope="col">Ac</th>

      
    </tr>
  </thead>
  <tbody>

  <?php
    
      $rooms = mysqli_query($conn,"select * from rooms");
$c=1;
while($r = mysqli_fetch_array($rooms)){
  $rid = $r["rid"];
  $rno =$r["room_no"];
  $b = mysqli_query($conn,"select * from allotte_room where rid='$rid'");
  if(mysqli_num_rows($b)>0){
  }
  else{
 
  ?>
    <tr>
      <th scope="row"><?php echo $rno; ?></th>
      <td><?php echo $r["total_bed"]; ?></td>
      <td><?php echo $r["fan"];?></td>
      <td><?php echo $r["heater"];?></td>
      <td><?php echo $r["ac"];?></td>
<?php
 }

}
?>
      
    </tr>
  
    </tr>
   
  </tbody>
</table>



        </div>



         </div>  
         </div></section>





<script>


var loadFile = function(event) {
var reader = new FileReader();
reader.onload = function(){
var pic1 = document.getElementById('output1');
pic1.src = reader.result;
};
reader.readAsDataURL(event.target.files[0]);
};




var loadFile2 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
            var pic1 = document.getElementById('output2');
            pic1.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };

    
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


  function allot() {
          document.getElementById("allot").style.display = "block";
          document.getElementById("deallot").style.display = "none";
          document.getElementById("reserved").style.display = "none";
          document.getElementById("add").style.display = "none";
        }

        function reserved() {
          document.getElementById("allot").style.display = "none";
          document.getElementById("reserved").style.display = "block";
          document.getElementById("deallot").style.display = "none";
          document.getElementById("add").style.display = "none";
        }

        function deallot() {
          document.getElementById("allot").style.display = "none";
          document.getElementById("reserved").style.display = "none";
          document.getElementById("deallot").style.display = "block";
          document.getElementById("add").style.display = "none";
        }

        function add() {
          document.getElementById("allot").style.display = "none";
          document.getElementById("reserved").style.display = "none";
          document.getElementById("deallot").style.display = "none";
          document.getElementById("add").style.display = "block";
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