<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="border rounded-3 w-50 mx-auto my-5 p-3">
        <form action="../actions/register.php" method="post">
            <h1 class="display-6 text-uppercase text-center mb-3">Register</h1>

            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control mb-2">

            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control mb-2">

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control mb-2">

            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control mb-4">

            <input type="submit" value="Register" name="btn_register" class="btn btn-success w-100">
            
            <p class="text-center">Registered already? <a href="index.php">Log in</a>.</p>
        </form>
    </div>
</body>
</html>