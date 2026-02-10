<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<!-- <form  action="index.php" method="post" class="w-75 m-auto my-5">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number_1</label>
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number_2</label>
    <input type="number" name="num2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
   <select name="operators" id="">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
   </select>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->






<form  action="index.php" method="post" class="w-75 m-auto my-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="text" name="user_name"
     value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" name="email"
     value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']  ;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"
     value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label"  for="exampleCheck1">remember me </label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>