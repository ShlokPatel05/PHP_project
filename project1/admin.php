<?php

if(isset($_POST["regbtn"]))
{

    // include("conntection.php");

        $fn = $_POST["fullname"];
        $eid = $_POST["email"];
        $pwd = $_POST["password"];
        $tel = $_POST["contact"];


        // $qry = "INSERT INTO `reg`(`id`, `fullname`, `email`, `password`, `contact`) VALUES (NULL,'$fn','$eid','$pwd','$tel')";

        // $result = mysqli_query($connect, $qry)

        // if($result)
        {
            ?> <script>Registration successfull</script> <?php
        }
        else
        {
           echo "somthing went wrong"
        }


}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">


</head>


<body>

    <div class="container" id="reg">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header" >
                        <b>Registration Form</b>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group" >
                                <input type="text" placeholder="Fullname"  class="form-control" name="fullname">
                            </div>
                            <div class="form-group" >
                                <input type="email" placeholder="Email" class="form-control" name="email">
                            </div>
                            <div class="form-group" >
                                <input type="password" placeholder="Password" class="form-control" name="password">
                            </div>
                            <div class="form-group" >
                                <input type="tel" placeholder="Contact" class="form-control" name="contact">
                            </div>
                            <div class="form-group" >
                                <button type="submit" class="btn btn-success" class="form-control" name="regbtn">Register</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
    




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>