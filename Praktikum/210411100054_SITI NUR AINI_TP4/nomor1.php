<h3>- Modul 4 Nomor 1 - <br> Nama : Siti Nur Aini <br> NIM : 210411100054</h3>
<hr>

<?php 
session_start();

if(isset($_SESSION['nama']) && isset($_SESSION['pass'])){
    header('location: nomor2.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .judul{
            text-align: center;
            text-decoration: underline;
        }
        
        .kotak_login{
        width: 350px;
        background: white;
        margin: 80px auto;
        padding: 30px 20px;
        border: solid 1px black;
        border-radius: 10px;
    }

        #username, #password{
            width:350px;
            height:40px;
            background: white;
            border: solid 1px black;
            
        }
        
        #login{
            width:350px;
            height:40px;
            background: #46de4b;
            font-size: 11pt;
            width: 100%;
            border: none;

        }
    </style>
</head>
<body>
    <div class="kotak_login">
    <h2 class="judul">Form Login</h2>
    <form action="session.php" method="POST">
        <table cellpadding="4">
            <tr>
                <td>
                    <label for="username"><strong>Username</strong> </label>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="username" id="username" placeholder="Enter username">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password"><strong>Password</strong> </label>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" name="password" id="password" placeholder="Enter password">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me </label> 
                </td>
            </tr>

            <tr>
                <td>
                    <button  type="submit" name="login" id="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
    </div>

</body>
</html>