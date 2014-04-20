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
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var f=document.forms["reg"]["username"].value;
    var g=document.forms["reg"]["password"].value;
    var h=document.forms["reg"]["pic"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
      {
      alert("All Field must be filled out");
      return false;
      }
    if (a==null || a=="")
      {
      alert("First name must be filled out");
      return false;
      }
    if (b==null || b=="")
      {
      alert("Last name must be filled out");
      return false;
      }
    if (c==null || c=="")
      {
      alert("Gender name must be filled out");
      return false;
      }
    if (d==null || d=="")
      {
      alert("address must be filled out");
      return false;
      }
    if (e==null || e=="")
      {
      alert("contact must be filled out");
      return false;
      }
    if (f==null || f=="")
      {
      alert("picture must be filled out");
      return false;
      }
    if (g==null || g=="")
      {
      alert("username must be filled out");
      return false;
      }
    if (h==null || h=="")
      {
      alert("password must be filled out");
      return false;
      }
    }
    </script>

    <body>
    
    <!--
	<div class="container">
        <form name="register" action="register_exec.php" method="post">
            <table width="510" border="0">
                <tr>
                    <h1><strong>Sign Up</strong></h1></td>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" maxlength="20" /></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password1" /></td>
                </tr>
                <tr>
                    <td>Confirm Password :</td>
                    <td><input type="password" name="password2" /></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="text" name="email" id="email" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </form>
         <button type="button" class="btn btn-success" input type="submit" value="Register">Submit</button>

-->
		<div class="col-md-4">
          <h2>Sign Up</h2>
            <hr>
          <form class="form-horizontal" role="form" action="register_exec.php" method="post">
           <div class="form-group">
           <label for="username" class="col-md-3 control-label">Username</label>
           <div class="col-md-9">
             <input type="text" name="username" maxlength="20" class="form-control" id="username" placeholder="Username">
           </div>
           </div>
           <div class="form-group">
           <label for="password1" class="col-md-3 control-label">Password</label>
           <div class="col-md-9">
             <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
           </div>
           </div>
           <div class="form-group">
           <label for="password2" class="col-md-3 control-label">Confirm Password</label>
           <div class="col-md-9">
             <input type="password" name="password2" class="form-control" id="password2" placeholder="Password (Confirmation)">
           </div>
           </div>
           <div class="form-group">
           <label for="email" class="col-md-3 control-label">Email</label>
           <div class="col-md-9">
             <input type="text" name="email" class="form-control" id="email" placeholder="Email">
           </div>
           </div>
           </div>
           <div class="form-group">
           <div class="col-md-offset-3 col-md-9">
            <input type="submit" value="Sign Up!" class="btn btn-success">
             <!-- <button input type="submit" class="btn btn-success" value="Register">Sign Up!</button> -->
           </div>
           </div>
          </form>
          
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
    </div>
    </body>

</html>