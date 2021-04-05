<?php
session_start();
$form_error = '';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == 'Herdin@asmara1.com' AND $password == 'asmara1'){
        $_SESSION['email'] = $email;
        header('Location: Dashboard.php');
    }else{
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Sign In</title>
</head>
<style type="text/css">
 .yos{
        border: solid;
        background-color: silver;
        width: 300px;
        height: 200px;
        margin: 100px;
    }
    </style>
<body>
<center>
     <div class="yos">
    <h3>Sign In</h3>
 

    <form method="POST" action="index.php">
        Username : <input type="email" name="email"><br>
        Password : <input type="password" name="password"><br>
        <?php echo $form_error; ?>
        <input type="submit" name="submit" value="Sign In">
    </form>
    </div>
</center>
</body>
</html>