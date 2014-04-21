<?php
$loggedin = $_SESSION['loggedin'];
if ($loggedin){
  header ('Location: Home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> Triki </title>

  <meta  name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/LandingStyleSheet.css">
  <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
</head>

<script type="text/javascript">
function validateForm()
{
  var a=document.forms["reg"]["firstname"].value;
  var b=document.forms["reg"]["lastname"].value;
  var c=document.forms["reg"]["username"].value;
  var d=document.forms["reg"]["password1"].value;
  var e=document.forms["reg"]["password2"].value;
  var f=document.forms["reg"]["email"].value;

  if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
    document.getElementById('allfields-error').innerHTML="All fields must be filled out.";
    return false;
  }
  if (a==null || a=="")
  {
    document.getElementById('firstname-error').innerHTML="Please enter your first name.";
    return false;
  }
  if (b==null || b=="")
  {
    document.getElementById('lastname-error').innerHTML="Please enter your last name.";
    return false;
  }
  if (c==null || c=="")
  {
    document.getElementById('username-error').innerHTML="Please enter a username.";
    return false;
  }
  if (d==null || d=="")
  {
    document.getElementById('password1-error').innerHTML="Please enter a password.";
    return false;
  }
}
if (e==null || e=="")
{
  document.getElementById('password2-error').innerHTML="Please re-enter your password.";
  return false;
}
}
if (f==null || f=="")
{
  document.getElementById('email-error').innerHTML="Please enter a valid email address.";
  return false;
}
}
</script>



<body>

  <div id="regPanel" class="panel panel-info" style="width: 70%; margin-top:30px; margin-left:auto; margin-right:auto;">
    <div class="panel-heading">
      <div class="container" style="font-size: 30px;">
        Sign Up
      </div>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" name="reg" role="form" onsubmit="return validateForm()" action="register_exec.php" method="post">

        <div class="form-group">
          <label for="firstname" class="col-md-3 control-label">First Name</label>
          <div class="col-md-9">
            <input type="text" name="firstname" maxlength="20" class="form-control" id="firstname" placeholder="First">
            <div id="firstname-error"> </div>
          </div>
        </div>

        <div class="form-group">
          <label for="lastname" class="col-md-3 control-label">Last Name</label>
          <div class="col-md-9">
            <input type="text" name="lastname" maxlength="20" class="form-control" id="lastname" placeholder="Last">
            <div id="lastname-error"> </div>
          </div>
        </div>

        <div class="form-group">
          <label for="username" class="col-md-3 control-label">Username</label>
          <div class="col-md-9">
            <input type="text" name="username" maxlength="20" class="form-control" id="username" placeholder="Username">
            <div id="username-error"> </div>
          </div>
        </div>

        <div class="form-group">
          <label for="password1" class="col-md-3 control-label">Password</label>
          <div class="col-md-9">
            <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
            <div id="password1-error"> </div>
          </div>
        </div>

        <div class="form-group">
          <label for="password2" class="col-md-3 control-label">Confirm Password</label>
          <div class="col-md-9">
            <input type="password" name="password2" class="form-control" id="password2" placeholder="Password (Confirmation)">
            <div id="password2-error"> </div>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-md-3 control-label">Email</label>
          <div class="col-md-9">
            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
            <div id="email-error"> </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-9" id="allfields-error"> </div>
        </div>

        <div class="form-group">
          <div class="col-md-offset-3 col-md-9">
            <input type="submit" value="Sign Up!" class="btn btn-success">
            <!-- <button input type="submit" class="btn btn-success" value="Register">Sign Up!</button> -->
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
  <td colspan="2">
  <div align="center">
  <?php
  // $remarks=$_GET['remarks'];
  // if ($remarks==null and $remarks=="") {
  //     echo 'Register Here';
  // }
  // if ($remarks=='success'){
  //     echo 'Registration Success';
  // }
  ?>
</div></td>
</tr>
<tr>
<td width="95"><div align="right">First Name:</div></td>
<td width="171"><input type="text" name="fname" /></td>
</tr>
<tr>
<td><div align="right">Last Name:</div></td>
<td><input type="text" name="lname" /></td>
</tr>
<tr>
<td><div align="right">Picture:</div></td>
<td><input type="text" name="pic" /></td>
</tr>
<tr>
<td><div align="right">Username:</div></td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td><div align="right">Password:</div></td>
<td><input type="text" name="password" /></td>
</tr>
<tr>
<td><div align="right"></div></td>
<td><input name="submit" type="submit" value="Submit" /></td>
</tr>
</table>
</form> -->
</body>

</html>
