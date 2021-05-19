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
        <form action="">

        <div class="form-group">
    <label for="exampleFormControlInput1">Guest CNIC</label>
    <input type="number" class="form-control" id="exampleFormControlInput1">
  </div>

<div class="form-group">
    <label for="exampleFormControlInput5">Room No</label>
    <input type="number" class="form-control" id="exampleFormControlInput5">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput3">Bed No</label>
    <input type="text" class="form-control" id="exampleFormControlInput3" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4">Date </label>
    <input type="date" class="form-control" id="exampleFormControlInput4" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput2">Charges</label>
    <input type="number" class="form-control" id="exampleFormControlInput2">
  </div>


  
  <div class="form-group room-btn">
      <input type="submit" value="Allot">
  </div>

</form>
        </section>


        <section id="deallot" class="">


        <form action="">

        <div class="form-group">
    <label for="exampleFormControlInput1">Guest CNIC</label>
    <input type="number" class="form-control" id="exampleFormControlInput1">
  </div>

<div class="form-group">
    <label for="exampleFormControlInput5">Room No</label>
    <input type="number" class="form-control" id="exampleFormControlInput5">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput3">Bed No</label>
    <input type="text" class="form-control" id="exampleFormControlInput3" >
  </div>

  

  <div class="form-group room-btn">
      <input type="submit" value="Check Out">
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
      <th scope="col">Bed No</th>
      <th scope="col">Month</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Khan</td>
      <td>3</td>
      <td>NA</td>
      <td>Jan</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Aziz</td>
      <td>4</td>
      <td>2</td>
      <td>Mar</td>
      
    </tr>
   
  </tbody>
</table>
        </section>

        <section id="add">


        <form action="">



<div class="form-group">
<label for="exampleFormControlInput7">Room No</label>
<input type="number" class="form-control" id="exampleFormControlInput7">
</div>

<div class="form-group">
<label for="exampleFormControlInput6">Type</label>
<input type="text" class="form-control" id="exampleFormControlInput6" placeholder="Eg: (single, double, and other)">
</div>

<div class="form-group">
<label for="exampleFormControlInput8">Total Beds</label>
<input type="number" class="form-control" id="exampleFormControlInput8" >
</div>

<div class="form-group">
<label for="exampleFormControlInput9">Fan </label>
<input type="text" class="form-control" id="exampleFormControlInput9" placeholder="Eg: (Yes or No)">
</div>

<div class="form-group">
<label for="exampleFormControlInput10">Room Heater </label>
<input type="text" class="form-control" id="exampleFormControlInput10" placeholder="Eg: (Yes or No)">
</div>

<div class="form-group">
<label for="exampleFormControlInput11">AC </label>
<input type="text" class="form-control" id="exampleFormControlInput11" placeholder="Eg: (Yes or No)">
</div>

<div class="form-group">
<label for="exampleFormControlInput12">Washroom </label>
<input type="text" class="form-control" id="exampleFormControlInput12" placeholder="Eg: (Yes or No)">
</div>


<div class="form-group groupPhoto">
                                                <p>Upload Picture (max 4)</p>
<div class="form-group">

                                               
                                                    <label for="photo1" id="photoLabel1"> 
                                                  <img src="../assets/images/placeholder.png" id="output1" alt=""> <i class="fa fa-camera"></i> </label>
                                                    <input type="file" id="photo1" accept="image/*" onchange="loadFile(event)">

                                                                                                      
                                                    <label for="photo2" id="photoLabel2"> 
                                                    <img src="../assets/images/placeholder.png" id="output2" alt="">  <i class="fa fa-camera"></i> </label>
                                                    <input type="file" id="photo2" accept="image/*" onchange="loadFile2(event)">

                                                    <label for="photo2" id="photoLabel3"> 
                                                    <img src="../assets/images/placeholder.png" id="output3" alt="">  <i class="fa fa-camera"></i> </label>
                                                    <input type="file" id="photo3" accept="image/*" onchange="loadFile3(event)">

                                                    <label for="photo2" id="photoLabel4"> 
                                                    <img src="../assets/images/placeholder.png" id="output4" alt="">  <i class="fa fa-camera"></i> </label>
                                                    <input type="file" id="photo4" accept="image/*" onchange="loadFile4(event)">

                                                 
                                                    
                                                    

</div>
</div>


<div class="form-group room-btn">
<input type="submit" value="Add Room">
</div>

</form>

        </section>

         </div>



        <div class="col-md-7">
         <p class="float"> <span class="room-type"> Single Rooms </span></p>
        
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Room No</th>
      <th scope="col">Beds </th>
      <th scope="col">Fan</th>
      <th scope="col">Heater</th>
      <th scope="col">Ac</th>
      <th scope="col">Washroom</th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">10</th>
      <td>1</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>

      
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>2</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      
    </tr>
   
  </tbody>
</table>

<p class="float"><span class="room-type">Double Rooms </span></p>
        
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Room No</th>
      <th scope="col">Beds </th>
      <th scope="col">Fan</th>
      <th scope="col">Heater</th>
      <th scope="col">Ac</th>
      <th scope="col">Washroom</th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2</th>
      <td>1</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>

      
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>2</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      
    </tr>
   
  </tbody>
</table>


<p class="float"><span class="room-type">Other Rooms </span></p>
        
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Room No</th>
      <th scope="col">Beds </th>
      <th scope="col">Fan</th>
      <th scope="col">Heater</th>
      <th scope="col">Ac</th>
      <th scope="col">Washroom</th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">3</th>
      <td>1</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>

      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>2</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Yes</td>
      
    </tr>
   
  </tbody>
</table>

        </div>



         </div>  
         </div></section>





<script>


function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }

    
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

<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>