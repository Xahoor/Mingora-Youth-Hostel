<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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
#profile,#image,#privacy,#general{
    margin-top: 20px;

}

#image,#privacy,#general{
    display: none;
}

.profile{
    border: 1px solid #1C6266;
    padding: 5px 15px;
    border-radius: 5px;
    background-color: #1C6266;
    color: #eee;
    font-size: 21px;
}

.prechange{
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 2px #EAF3FA;
    color: #6a6a6a;
}

.prechange i{
    color: #3a3a3a;
}

.prechange p button{
    float: right;
    border: none;
    background: none;
    color: #216fdb;
}

.prechange p button:hover{
    text-decoration: underline;
}



#image .profileImage img{
    width: 100%;
    height: 200px;
    border-radius: 5px;
}

#image label{
    
    color: #eee;
    position: absolute;
    
   
    bottom: 0;
    left: 0;
    top: 0;
    text-align: center;
    right: 0;
    opacity: .7;
    
}

#cimage{
    display: none;
}

#savePic,#savePrivacy,#saveGeneral{
   margin-top: 10px;
   padding: 5px 15px;
   background-color: #1877f1;
   border: 1px solid #1877f1;
   color: #eee;
   font-size: 21px;
   border-radius: 5px;

}

#saveGeneral{
    margin-bottom: 10px;
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
        <a class="nav-link image active" href="profile.php" role="button" >
        
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

<div class="container" id="profile">
<p><span class="profile"> <i class="fas fa-user"></i> Profile</span></p>
    <div class="row">
    
    
          <div class="col-md-2"></div>
            <div class="col-md-8">
                
                <div class="prechange">
                <p> <i class="fas fa-image"></i> Change/Upload Image <button onclick="myImage()">Edit</button></p>
                    <hr>
                    <p> <i class="fas fa-user-lock"></i> Change Email and Password <button onclick="myPrivacy()">Edit</button></p>
                    <hr>
                    <p> <i class="fas fa-id-card"></i> Change General Information <button onclick="myGeneral()">Edit</button></p>
                    <hr>
                </div>
            </div>
            
    </div>
</div>

<section id="image">
    <div class="container">
    <div class="row">

        <div class="col-md-2"></div>
        
       
            <div class="col-md-4 profileImage">
                
            <img src="../assets/images/obaid.jpg" id="output1" alt="">
            
                <label for="cimage"> <i class="fa fa-camera"></i></label>
                <input type="file" id="cimage" accept="image/*" onchange="loadFile(event)">          
                
                <input type="submit" value="Save picture" id="savePic">
           
            </div>

            
            

      

    </div> 
    </div>
        
</section>

<section id="privacy">

<div class="container">
    <div class="row">

        <div class="col-md-2"></div>
        
       
            <div class="col-md-8 profilePrivacy">
                
                <form action="">


                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="obaid123@gmail.com">
                    </div>
                    
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" id="mypass" class="form-control" value="1234">
                    </div>

                    <div class="form-check">
                    <input type="checkbox" onclick="myPass()" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                    </div>

                    <input type="submit" value="Save" id="savePrivacy">

                </form>
           
            </div>

            
            

      

    </div> 
    </div>

</section>


<section id="general">

<div class="container">
    <div class="row">

        <div class="col-md-2"></div>
        
       
            <div class="col-md-8 profileGeneral">
                
                <form action="">


                    <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" value="Obaid Khan">
                    </div>
                    
                    <div class="form-group">
                    <label for="">Age</label>
                    <input type="number" class="form-control" value="22">
                    </div>

                    <div class="form-group">
                    <label for="">Contact</label>
                    <input type="number" class="form-control" value="03349324243">
                    </div>

                    <div class="form-group">
                    <label for="">CNIC</label>
                    <input type="number" class="form-control" value="156024568839332">
                    </div>

                    <input type="submit" value="Save" id="saveGeneral">

                </form>
           
            </div>

      

    </div> 
    </div>

</section>

<script>
function myPass() {
  var x = document.getElementById("mypass");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
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


  function myImage() {
          document.getElementById("image").style.display = "block";
          document.getElementById("privacy").style.display = "none";
          document.getElementById("general").style.display = "none"; 
        }
        function myPrivacy() {
          document.getElementById("image").style.display = "none";
          document.getElementById("privacy").style.display = "block";
          document.getElementById("general").style.display = "none"; 
        }
        function myGeneral() {
          document.getElementById("image").style.display = "none";
          document.getElementById("privacy").style.display = "none";
          document.getElementById("general").style.display = "block";
        }
</script>
<!-- preview image -->
<script>

        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
            var pic1 = document.getElementById('output1');
            pic1.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };

</script>

<script src="../assets/js/sweetalert.js"></script>

<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>