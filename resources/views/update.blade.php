<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <style>
      input{
          margin: 20px;
          color: lightblue;
      }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="text-center">Updation Form</h1>
        <div class="col-sm-8">
            <form action="{{url('/update',$data->id)}}"  method="post" enctype="multipart/form-data">
@csrf


 

<br>
<label class="mt-3">First Name</label>
<input type="text" name="firstname" id="" class="form-control mt-1" value="{{$data->fname}}">
      
<label class="mt-3">Last Name</label>
<input type="text" name="lastname" id="" class="form-control mt-1"  value="{{$data->lname}}">
           
<label class="mt-3">Email</label>
<input type="email" name="email" id="" class="form-control mt-1"  value="{{$data->email}}">
         
<label class="mt-3">Mobile Number</label>
<input type="number" name="mobile" id="" class="form-control mt-1"  value="{{$data->mobile}}">
         
<label class="mt-3">Skills</label><BR>
<input type="checkbox" name="php"   value="Php"> PHP
<input type="checkbox" name="mysql"   value="MySql"> MYSQL<br>
<input type="checkbox" name="laravel"   value="Laravel"> LARAVEL
<input type="checkbox" name="node_js"   value="Node Js"> NODE JS<br>     
@php
    
$a="";
$b="";
if($data->gender=="male"){
$a="checked";
}
else{
$b="checked";
}
@endphp  

<label class="mt-3">Gender</label><br>
<input type="radio" name="gender" {{$a}} id="m" value="male">Male
<input type="radio" name="gender" {{$b}}  id="f" value="female">Female
<br>
<label class="mt-3">Aadhar Number</label>
<input type="text"  name="aadharno" class="form-control mt-1" value="{{$data->aadharno}}">
<br>

<label class="mt-3">Password</label>
<input type="text" name="pass" id=""  class="form-control mt-1" value="{{$data->password}}">
<br>

<input type="submit" value="Update" class="btn btn-primary">

</form>
        </div>
    </div>
</div>
</body>
</html>