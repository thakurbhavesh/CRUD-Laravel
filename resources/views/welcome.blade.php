<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <style>
      input{
          margin: 20px;
      }
      h1{
          text-shadow: 2px 2px 1px magenta;
      }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container ">
    <div class="row">
        <h1 class="text-center">Registration Form</h1>
        <div class="col-sm-8">
            
            <form action="/register"  method="post" enctype="multipart/form-data">
@csrf

<fieldset class="mt-2"><b>Role</b>
 <select name="role">
     <option></option>
 <option value="user">User</option>
<option value="admin">Admin</option>
 </select>

<br>
<label class="mt-2">First Name</label>
<input type="text" name="firstname" id="" class="form-control" placeholder="Enter Your First Name">
      
<label class="mt-2">Last Name</label>
<input type="text" name="lastname" id="" class="form-control"  placeholder="Enter Your Last Name">
           
<label class="mt-2">Email</label>
<input type="email" name="email" id="" class="form-control"  placeholder="Enter Your Email">
         
<label class="mt-2">Mobile Number</label>
<input type="number" name="mobile" id="" class="form-control"  placeholder="Enter Your Mobile Number">
         
<label class="mt-2">Skills</label><BR>
<input type="checkbox" name="php"   value="Php"> PHP
<input type="checkbox" name="mysql"   value="MySql"> MYSQL<br>
<input type="checkbox" name="laravel"   value="Laravel"> LARAVEL
<input type="checkbox" name="node_js"   value="Node Js"> NODE JS<br>     

<label class="mt-2">Gender</label><br>
<input type="radio" name="gender" id="m" value="male">Male
<input type="radio" name="gender" id="f" value="female">Female
<br>
<label class="mt-2">Aadhar Number</label>
<input type="text" placeholder="Enter Your Aadhar Number" name="aadhar" class="form-control" >
<br>
<label class="mt-2">Upload Aadhar</label>
<input type="file" name="uploadaadhar" id="" class="form-control" >
<br>
<label class="mt-2">Upload Certificate</label>
<input type="file" name="uploadcer" id="" class="form-control" >
<br>
<label class="mt-2">Password</label>
<input type="password" name="pass" id="" placeholder="Enter Your Password" class="form-control" >
<br>
<label class="mt-2">Confirm Password</label>
<input type="password" name="cpass" id="" placeholder="Enter Your Confirm Password" class="form-control" >
<br>
<input type="submit" value="Register" class="btn btn-primary mb-5">

</form>
        </div>
    </div>
    <b>Already have an account?</b>
    <button><a href="/login">Login</a></button>
</div>
</body>
</html>