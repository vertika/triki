<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Triki </title>

        <meta  name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/LandingStyleSheet.css">

    </head>

    <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["mname"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
    var f=document.forms["reg"]["pic"].value;
    var g=document.forms["reg"]["pic"].value;
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

        <div id="registration" align = "center">
           <form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
                <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
                  <tr>
                    <td colspan="2">
                        <div align="center">
                          <?php 
                        $remarks=$_GET['remarks'];
                        if ($remarks==null and $remarks=="")
                        {
                        echo 'Register Here';
                        }
                        if ($remarks=='success')
                        {
                        echo 'Registration Success';
                        }
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
                    <td><div align="right">Gender:</div></td>
                    <td><input type="text" name="mname" /></td>
                  </tr>
                  <tr>
                    <td><div align="right">Address:</div></td>
                    <td><input type="text" name="address" /></td>
                  </tr>
                  <tr>
                    <td><div align="right">Contact No.:</div></td>
                    <td><input type="text" name="contact" /></td>
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
            </form>
        </div>

    </body>

</html>