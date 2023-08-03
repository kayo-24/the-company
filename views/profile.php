<?php

include "../classes/User.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">initial
    <meta name="viewport" content="width=device-width, -scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php 
    include "nav.php";
    
    $u = new User;
    $user_data = $u->getUser($_SESSION['user_id']);
    ?>

    <div class="card w-75 mx-auto my-5">
        <div class="card-header">
            <img src="../images/<?= $user_data['photo'] ?>" alt="user avatar" class="img-thumbnail">
        </div>
        <div class="card-body">
            Choose Photo
            <form action="../actions/uploadPhoto.php" method="post" enctype="multipart/form-data">
                <input type="file" name="avatar" id="avatar" class="form-control">
                <input type="submit" value="Upload Photo" class="btn btn-outline-secondary mt-1 mb-4">
            </form>
            <h2 class="display-6"><?= $user_data['first_name']." ".$user_data['last_name'] ?></h2>
            <p><?= $user_data['username'] ?></p>
        </div>
    </div>
</body>
</html>