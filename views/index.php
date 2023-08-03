<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="../actions/login.php" method="post" class="border rounded-3 w-50 my-5 mx-auto p-3">
        <h1 class="display-6 text-center text-uppercase mb-3">Login</h1>

        <input type="text" name="username" placeholder="USERNAME" required class="form-control mb-2">

        <input type="password" name="password" placeholder="PASSWORD" required class="form-control mb-4">

        <input type="submit" value="Log in" class="btn btn-primary w-100 mb-3">

        <p class="text-center">
            <a href="register.php" class="text-decoration-none">Create account</a>
        </p>
    </form>
</body>
</html>