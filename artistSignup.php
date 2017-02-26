<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>artist</title>
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

<script>
  function validateEntries(){
  var validName = document.forms["artForm"]["name"].value;
    if (validName != "") {
      var validChars = /^[A-Za-z]+$/;
      if (validName.value.match(validChars)) {
        return true;
      }else 
      alert("Enter a correct name");
      return false;
    }

   var validEmail = document.forms["artForm"]["email"].value;
    if (validEmail !="") {
      var atSign = validEmail.indexOf("@");
      var dotposition = validEmail.lastIndexOf(".");
      if (atSign<1 || dotposition<dotposition+2 || dotposition+2>=x.length) {
        alert("Enter a correct name");
        return false;
      }else 
      return false;
    }

    var validUsername = document.forms["artForm"]["username"].value;
    if (validUsername != "") {
      var validChars =/^[0-9a-zA-Z]+$/;
      if (validUsername.value.match(validChars)) {
        return true;
      }else 
      alert("Enter a correct user name");
      return false;
    }

   var validPassword = document.forms["artForm"]["password"].value;
    if (validPassword == "") {
      var passValidate=^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$+;
      if (validPassword.value.match(passValidate)) {
          return true;
        }else
        alert("Minimum 8 characters, at least 1 Alphabet and 1 Number");
        return false;
      }
var confirmedPass = document.forms["artForm"]["confirmpassword"].value;
  if (confirmedPass!="") {
    var confirm = document.forms["artForm"]["password"].value;
    if (confirmedPass==confirm){
        return true;
    }else
    alert("Password missmatch");
    return false;
  }
  // var validcopyrightno = document.forms["artForm"]["copyrightno"].value;
  //   if (validcopyrightno == "") {
  //     alert("Copyright is required");
  //   }

  var validregion = document.forms["artForm"]["region"].value;
    if (validregion != "") {
      var validChars = /^[A-Za-z]+$/;
      if (validregion.value.match(validChars)) {
        return true;
      }else 
      alert("Enter a correct region");
      return false;
    }

  var validmusictype = document.forms["artForm"]["musictype"].value;
    if (validmusictype != "") {
      var validChars = /^[A-Za-z]+$/;
      if (validmusictype.value.match(validChars)) {
        return true;
      }else 
      alert("Enter the correct type of your music");
      return false;
    }

  var validbirthdate = document.forms["artForm"]["birthdate"].value;
    if (validbirthdate != "") {
      var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
      if (pattern.test(validbirthdate)) {
          return true;
      }else
      alert("Input corret date format");
      return false
    }

  var validwebsite = document.forms["artForm"]["website"].value;
    if (validwebsite != "") {
   var urls = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
   if (urls.test(validwebsite)) {
      return true;
   }else 
      alert("Website is required. If you dont have one, enter url for one of your socila media accounts");
      return false;
    }  

var validabout = document.forms["artForm"]["about"].value;
    // if (validabout == "") {
    //   alert("Write something about yourself");
    // }  

var validcontact = document.forms["artForm"]["contact"].value;
    if (validcontact == "") {
      alert("Write your contact information");
     } 

var validaob = document.forms["artForm"]["aob"].value;
    // if (validaob == "") {
    //   alert("Write sothing unique about you");
    // } 
return true;
  }
</script>

<!-- Form for data entry-->
<form class="form-horizontal" style="background-color: #4e3f3e;width: 50%;margin:auto;color: white;" name="artForm" action="" method="post" onclick ="return validateEntries()">
  <div align="center">
  <h1> SIGN UP NOW</h1>
  </div>
  <div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="name" placeholder="Full Name" required>
      </div>
  </div>  

  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" required placeholder="Email"> 
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="username">User name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" required placeholder="Username"> 
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password" required placeholder="Password">
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="confirmpassword">Confirm Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control"  name="confirmpassword" required placeholder="Confirm Password">
      </div>
  </div>
    
  <div class="form-group">
   <label class="control-label col-sm-2" for="copyrightno">Copyright Registration Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="copyrightno" required placeholder="Copyright">
      </div>
  </div> 
    
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="region">Region of origin:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="region" required placeholder="Region"> 
      </div>
  </div> 
    
 <div class="form-group">
   <label class="control-label col-sm-2" for="musictype">Type of music:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="musictype" required placeholder="Music type"> 
      </div>
  </div>  
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="birthdate">Date of birth:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="birthdate" required placeholder="dd/mm/yyyy"> 
      </div>
  </div>  
   

  <div class="form-group">
   <label class="control-label col-sm-2" for="website">Website:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="website" required placeholder="www.something"> 
      </div>
  </div>
   
  <div class="form-group">
   <label class="control-label col-sm-2" for="about">About you:</label>
      <div class="col-sm-10">
        <textarea name="about" class="form-control" rows="4" cols="50" required placeholder="Write about you"></textarea>
      </div>
  </div>
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="contact">Contact information:</label>
      <div class="col-sm-10">
        <textarea name="contact" class="form-control" rows="4" cols="50" required placeholder="Contact information"></textarea>
        </div>
  </div>
   
 <div class="form-group">
   <label class="control-label col-sm-2" for="aob">Any other thing for fans:</label>
      <div class="col-sm-10">
        <textarea name="aob" class="form-control" rows="4" cols="50" required placeholder=" Something unique about yourself"></textarea>
        </div>
      </div>
   <div style="float: right; color: black;"><input type="submit" name="submit" onclick="return validateEntries()"></div><br><br>
    Already have an account?<div class="btn btn-link"><a href="home.php">Sign in</a></div>

  </div>
</form>

<!--Footer-->
<footer>
</footer>


    <!--javaScrypt link for bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>                             