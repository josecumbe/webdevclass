<?php
/*
 * All HTML & CSS Based on Templates from The Bootstrap Website.
 */
include('formfunctions.php');

if (isset($_POST['fullname']) && isset($_POST['emailaddress'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['emailaddress'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Use one of the two functions. Comment out other before running script.
    RegisterClientByPDO($fullname, $email, $username, $password);
    //RegisterClient($fullname, $emailaddress, $username, $password);
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Form Insert</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form method="POST" action="index.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name:</label>
                            <input type="text" name="fullname" class="form-control" id="exampleInputEmail1"placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email Address:</label>
                            <input type="text" name="emailaddress" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username:</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter email">
                       </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </body>
</html>

