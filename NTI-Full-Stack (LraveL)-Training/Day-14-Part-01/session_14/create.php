<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    

<form  class="w-75 m-auto my-5" action="handelInsert.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">first_name</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">last_name</label>
    <input type="text" name="last_name" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender</label>
    <input type="text" name="gender" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">money</label>
    <input type="text" name="money" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">city</label>
    <input type="text" name="city" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country</label>
    <input type="text" name="country" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country_code</label>
    <input type="text" name="country_code" class="form-control" id="exampleInputPassword1">
  </div>




  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>