<?php
require('user_validation.php');
$errors = [];
if(isset($_POST['submit'])) {
    $validation = new FormValidation($_POST);
    $errors = $validation->validateForm();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Training PHP</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="form_container">
            <label for="username" class="form_label">Username: </label>
            <input type="text" name="username" class="form_input" value="<?php echo htmlspecialchars($_POST["username"] ?: '') ?:''?>">
            <div class="error"><?php echo $errors['username'] ?: '' ?> </div>
            <label for="password" name='password' class="form_label" >Passoword: </label>
            <input type="password" name="password"class="form_input"  value="<?php echo htmlspecialchars($_POST["password"] ?: '') ?:''?>" >
            <div class="error"><?php echo $errors['password'] ?: '' ?> </div>
            <input type="submit" value="Submit" class="form_input" name="submit">
        </form>
    </div>
</body>
</html>