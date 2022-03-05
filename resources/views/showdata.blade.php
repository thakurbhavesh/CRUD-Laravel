<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<table border = "1" rowspan="2" class="table table-bordered table-hover table-responsive">
<tr class="success">
<th>Id</th>
<th>First Name</th>
<th>Last Name</td>

<th>Email</th>
<th>Mobile</th>
<th>Skill</td>
<th>Gender</td>
<th>Aadhar Number</th>
<th>Aadhar Upload</th>
<th>Multi Upload</th>
<th>Update</th>
<th>Delete</th>
</tr>

@foreach ($users as $user)
<tr class="text-primary">
<td class="font-weight-bold text-dark">{{ $user->id }}</td>
<td>{{ $user->fname }}</td>
<td>{{ $user->lname }}</td>

<td>{{ $user->email }}</td>
<td>{{ $user->mobile }}</td>
<td>{{ $user->skill}}</td>
<td>{{ $user->gender}}</td>
<td>{{ $user->aadharno}}</td>
<td>{{ $user->aadharfile}}</td>
<td>{{ $user->attachment}}</td>
<td class="btn btn-warning"><a href = 'upd/{{ $user->id }}'>Update</a></td>
<td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
</tr>
@endforeach
</table>
</body>
</html>