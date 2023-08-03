<?php
include "../classes/User.php";

$u = new User;
$user_data = $u->getUser($_GET['user_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include "nav.php"; ?>

    <div class="container w-75 mx-auto my-5">
        <form action="../actions/editUser.php?user_id=<?= $user_data['id'] ?>" method="post">
            <h1 class="display-6 text-center text-uppercase">Edit User</h1>

            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" value="<?= $user_data['first_name'] ?>" class="form-control">

            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" value="<?= $user_data['last_name'] ?>" class="form-control">

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" value="<?= $user_data['username'] ?>" class="form-control mb-3">

            <input type="submit" value="Save" class="btn btn-warning">
            <a href="dashboard.php" class="btn btn-secondary ms-2">Cancel</a>
        </form>
    </div>
</body>
</html>