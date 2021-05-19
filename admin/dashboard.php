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

    

    <li class="nav-item">
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

.daily{
  font-size: 21px;
  padding: 5px 10px;
  border: 1px solid #1c6266;
  color: #eee;
  background-color: #1c6266;
  border-radius: 5px 5px 0 0;
}

.daily-tbl{
  margin-top: -17px;
}
.daily-tbl th{
  background-color: #C2F1DB;
  margin-top: 0;
}

.daily-tbl td{
  background-color: #1c6266;
  color: #eee;
}
#guests,#registered{
    margin-top: 20px;
    
}

#registered{display: none;}


.announce-btn{
  text-align: right;
}

.announce-btn input{
  border: 1px solid #1c6266;
  padding: 5px 10px;
  background-color: #1c6266;
  color: #eee;
  font-size: 21px;
  border-radius: 5px;
}

#announce{
  margin-top: 20px;
}

#complains{
  display: none;
}
#announce label{
  font-size: 21px;
  font-weight: 600;
}
</style>
<section id="landing">
  <div class="container"> 
     <div class="row">

  
     <div class="col-md-6">
     <p class="daily">Daily Updates</p>
      <table class="table table-borderless daily-tbl">
  
  <tbody>
    <tr>
      <th scope="row">Total Rooms</th>
      <td>20</td>  
    </tr>
    <tr>
      <th scope="row">Reserved Rooms</th>
      <td>7</td>  
    </tr>
    <tr>
      <th scope="row">Guests</th>
      <td>7</td>  
    </tr>
    <tr>
      <th scope="row">Registered Users</th>
      <td>100</td>  
    </tr>
    <tr>
      <th scope="row">Complains</th>
      <td>10</td>  
    </tr>
    <tr>
      <th scope="row">Announcements</th>
      <td>9</td>  
    </tr>
 
</tbody>
</table>     </div>
     
          <div class="col-md-6">
          <button  onclick="announce()"> <i class="fas fa-bullhorn"></i> Announce</button>
         <button  onclick="complains()"> <i class="fas fa-mail-bulk"></i></i> Complains</button>

        <section id="announce">
            
            <form action="">
            <div class="form-group">
  <label for="exampleFormControlTextarea1"> Write Below </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>

  <div class="form-group announce-btn">
  <input type="submit" value="Announce">
  </div>


            
            </form>
        </section>


        <section id="complains">


        <table class="table table-borderless">
  
  <tbody>

    
    <tr>
      <th scope="row">Name</th>
      <th scope="row">Subject</th>
      <td>complain complain complain complain complain complain complain complain complain complain complain complaincomplain complain complain 
      complain complain complaincomplain complain complaincomplain complain complaincomplain complain complaincomplain complain complain
      complain complain complaincomplain complain complaincomplain complain complaincomplain complain complain</td>  
    </tr>
    
      
    <tr>
      <th scope="row">Name</th>
      <th scope="row">Subject</th>
      <td>complain complain complain complain complain complain complain complain complain complain complain complaincomplain complain complain 
      complain complain complaincomplain complain complaincomplain complain complaincomplain complain complaincomplain complain complain
      complain complain complaincomplain complain complaincomplain complain complaincomplain complain complain</td>  
    </tr>
 
</tbody>
</table>

        </section>


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



  
function announce() {
         
         document.getElementById("announce").style.display = "block";
         document.getElementById("complains").style.display = "none";
         
       }

       function complains() {
         
         document.getElementById("announce").style.display = "none";
         document.getElementById("complains").style.display = "block";
         
       }
</script>

<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>