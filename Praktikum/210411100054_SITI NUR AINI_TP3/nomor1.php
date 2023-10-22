<?php
$nama = $email = $website = $comment = $gender = "";
$namaErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["nama"])) {
        $namaErr = "Name is required";
    } else {
        $nama = $_POST["nama"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = $_POST["website"];
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

        Name : <input type="text" name="nama" >
        <span class="error"> * <?php echo $namaErr;?></span>
        <br><br>

        E-mail : <input type="text" name="email">
        <span class="error"> * <?php echo $emailErr;?></span>
        <br><br>

        Website : <input type="text" name="website" >
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>

        Comment: <textarea name="comment" rows="5" cols="40"></textarea> 
        <br><br>

        Gender :
        <input type="radio" name="gander" value="female" id="female">
        <label for="female">Female</label>
        <input type="radio" name="gander" value="male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gander" value="other" id="other">
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