<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid mx-5">
    <div class="row">
        <h1 class="text-center">Login Form</h1><hr>
        <div class="col-sm-6">
        <form action="/log" method="post">
    @csrf
    <div class="form-group mt-2">
      <label for="email" class="font-weight-bold">Email address:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Valid Email">
    </div>
    <div class="form-group mt-2 mb-4">
      <label for="pwd" class="font-weight-bold">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter Valid Password">
    </div>
    
    <button type="submit" class="btn btn-primary mx-2 fs-1">Login</button>
  </form>
  
        </div>
    </div>
</div>

</body>
</html>