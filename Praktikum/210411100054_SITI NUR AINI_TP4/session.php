<?php 

session_start();
$nama = 'aini';
$pass = '123';

if($nama == $_POST['username'] && $pass == $_POST['password']){
    if(!empty($_POST['remember'])) {
        $_SESSION['nama'] = $_POST['username'];
        $_SESSION['pass'] = $_POST['password'];
    }
    $_SESSION['log'] = $_POST['login'];
    header('location: nomor2.php');
} 

else{
    header('location: nomor1.php');
}

?>
