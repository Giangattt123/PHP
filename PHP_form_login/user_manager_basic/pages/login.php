<?php 
if(isset($_POST['btn_login'])){
    $erorr = array();
    if(empty($_POST['username']))
        $erorr['username'] = "Không được để trống username!";
    else{
        $pattern = '/^[A-Za-z0-9\.]{6,32}$/';
        if(!preg_match($pattern , $_POST['username'])){
            $erorr['username'] = "Tên đăng nhập không đúng định dạng";
        }else{
            $username = $_POST['username'];
        }
    }
    if(empty($_POST['password']))
        $erorr['password'] = "Không được để trống password!";
    else{
        $pattern = '/^([A-Z]){1}([\w\.!@#$%^&*()]+){5,31}$/';
        if(!preg_match($pattern , $_POST['password'])){
            $erorr['password'] = "Mật khẩu không đúng định dạng";
        }else{
            $password = $_POST['password'];
        }
    }
    if(empty($erorr)){
       if(check_login($username, $password)){
        $_SESSION['is_login'] = true;
        $_SESSION['user_login'] = $username;
        // Redirect_to()
        redirect_to("?page=home");
       }else{
        $erorr['account'] = "Tên tài khoản hoặc mật khẩu không chính xác";
       }
    }else{

    }
}
?>
<html>

<head>
    <title>Form_Login</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <!-- <link rel="stylesheet" href="../public/css/style.css"> -->
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="wp-form-login">
        <h1 class="page-title">Đăng nhập</h1>
        <form action="" method="POST" id="form-login">
            <input type="text" name="username" id="username" value="" placeholder="Username">
            <?php if(!empty($erorr['username'])){
                ?>
            <p class="erorr"><?php echo $erorr['username']; ?></p>
            <?php
            }?>
            <input type="password" name="password" id="password" value="" placeholder="Password">
            <?php if(!empty($erorr['password'])){
                ?>
            <p class="erorr"><?php echo $erorr['password']; ?></p>
            <?php
            }?>
            <input type="submit" name="btn_login" id="btn_login" value="Login">
        </form>
        <?php if(!empty($erorr['account'])){
                ?>
        <p class="erorr"><?php echo $erorr['account']; ?></p>
        <?php
            }?>
        <a href="" id="lost-pass">Forget password?</a>

    </div>
</body>

</html>