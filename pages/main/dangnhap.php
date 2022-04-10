<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
 header("Location:index.php?quanly=giohang");
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['email'] = $row_data['email'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
           
        }else{
            echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
            
        }
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập vào website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/fontawesome-free-5.10.2-web/css/all.css" rel="stylesheet" type="text/css"/>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="../../css/login.css">


    </head>
    <body>
        
        <main>
            <div class="container">
            <div class="login-form">
                <form action="" method="POST">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i ></i>
                        <input type="text" placeholder="Nhập username" name="email">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" placeholder="Nhập mật khẩu" name="password">
                    </div>
                    <div class="btn-box">
                        <button type="submit" name="dangnhap">
                            Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
            </div>


            <!-- <div class="container">
            <div class="login-form">
<form action="" autocomplete="off" method="POST" >
        <table border="1" width="50%" class="container"" style="text-align: center;border-collapse: collapse;">
            <tr>
                <td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input type="text" size="50" name="email" placeholder="Email..."></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" size="50" name="password" placeholder="Mật khẩu..."></td>
            </tr>
            <tr>
                
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
    </table>
    </form>
    </div>
            </div> -->
        </main>
       
       
    </body>
</html>

