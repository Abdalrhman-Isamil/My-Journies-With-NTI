<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <form class="w-75 m-auto my-5" action="handelInsert.php" method="post">

  <div class="mb-3">
    <label for="fisrt_name" class="form-label">Fisrt Name</label>
    <input type="text" name="first_name" class="form-control" id="fisrt_name">
  </div>

  <div class="mb-3">
    <label for="last_name" class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" id="last_name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="gender" class="form-label">gender</label>
    <input type="text" name="gender" class="form-control" id="gender">
  </div>

  <div class="mb-3">
    <label for="salary" class="form-label">Salary</label>
    <input type="text" name="salary" class="form-control" id="salary">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>