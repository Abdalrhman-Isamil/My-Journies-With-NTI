<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    


    <!--* ==================================================================================================== *-->


    <!-- <div class="container my-5">
        <h2 class="text-center mb-4">Simple Calculator</h2>

        <form action="index.php" method="post" class="w-50 m-auto">

            <div class="mb-3">
                <label class="form-label">First Number</label>
                <input type="number" name="num1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Second Number</label>
                <input type="number" name="num2" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Operator</label>
                <select name="operator" class="form-control" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Calculate</button>
        </form>

    </div> -->


    <!--* ==================================================================================================== *-->

    <?php

session_start();
if(isset($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $error){
        echo "<br>";
        echo $error;
        echo "<br>";
    }
}

?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Login</h2>

        <form action="index.php" method="post" class="w-50 m-auto">
            <div class="mb-3">
                <label for="usernameInput" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="usernameInput" required >
            </div>

            <div class="mb-3">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="passwordInput" required  >
            </div>


            <div class="mb-3">
                <label for="emailInput" class="form-label">age</label>
                <input type="number" name="age" class="form-control" id="emailInput" required >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>



</body>

</html>