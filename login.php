<?php
require_once('store.php');

$mystore->login();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>My Store Log In</title>

   
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Dota 2 Steam Wallet</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                <a href="login.php?logout=true;"><button type="button" class="btn btn-outline-light bg-dark btn-sm" name="logout">Create Account</button></a> 
            </div>
        </nav>
       
    <div class="container text-center mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:50px; width:50%;">
        <div class="form"><br>
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h2>Log In</h2>
            <form action="" method="POST">
                <div class="form-input">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username">
                </div><br>
                <div class="form-input">
                    <label for="">Password</label>
                    <input type="text" name="password" id="password">
                </div><br>
                <button type="submit" class="btn btn-outline-dark" name="submit">Login</button>
             <br><br>
            </form>
            </div>
            </div>
        </div>
    </div>
 


<!-- modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Incorrect Password or Username.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>