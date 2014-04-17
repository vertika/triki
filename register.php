<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Triki </title>

        <meta  name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/LandingStyleSheet.css">

    </head>
    <body>

        <div id="alternate_login" align = "center">
            <form action="register_action.php" method="post" name="frmregister">
                <table border="0" class="form">
                    <tbody>
                        <tr>
                            <th><strong>Username:</strong></th>
                            <td><input name="name" size="30" type="text"></td>
                        </tr>
                        <tr>
                            <th><strong>First Name:</strong></th>
                            <td><input name="fname" size="30" type="text"></td>
                        </tr>
                        <tr>
                            <th><strong>Last Name:</strong></th>
                            <td><input name="lname" size="30" type="text"></td>
                        </tr>
                        <tr>
                            <th><strong>Email:</strong></th>
                            <td><input name="email" size="30" type="text"></td>
                        </tr>
                        <tr>
                            <th><strong>Password:</strong></th>
                            <td><input name="password" size="30" type="password"></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td><input alt="Submit" type="submit" value="Submit"> <input alt="Reset" type="reset" value="Reset"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

    </body>

</html>