<?php
$nama = $email = $website = $comment = $gender = "";
$namaErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["nama"])) {
        $namaErr = "Name is required";
    } else {
        $nama = $_POST["nama"];
        if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
        $namaErr = "Only letters and white space allowed";
    }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
    }
    }
    
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = $_POST["website"];
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
    }
    }
    

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = $_POST["comment"];
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }

}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Form Validation Example</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
            .error{
                color:red;
            }
        </style>
    </head>

    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>
        
        Name : <input type="text" name="nama" value="<?php echo $nama;?>">
        <span class="error"> * <?php echo $namaErr;?></span>
        <br><br>

        E-mail : <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error"> * <?php echo $emailErr;?></span>
        <br><br>

        Website : <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>

        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea> 
        <br><br>

        Gender :
        <input type="radio" name="gender" value="female" id="female" <?php if (isset($gender) && $gender == "female") echo "checked";?>>
        <label for="female">Female</label>
        <input type="radio" name="gender" value="male" id="male" <?php if (isset($gender) && $gender == "male") echo "checked";?>>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="other" id="other" <?php if (isset($gender) && $gender == "other") echo "checked";?>>
        <label for="other">Other</label>
        <span class="error"> * <?php echo $genderErr;?></span>
        <br><br>

        <input type="submit" name="submit" value="submit">
    </form>
    <?php 
    echo "<h2>Your Input</h2>";
    echo "<br>";
    echo "$nama";
    echo "<br>";
    echo "$email";
    echo "<br>";
    echo "$website";
    echo "<br>";
    echo "$comment";
    echo "<br>";
    echo "$gender";

    ?>
    </body>
</html>