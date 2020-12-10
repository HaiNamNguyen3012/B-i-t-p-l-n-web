<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/stylesheets/dangky.css">
    <title>Đăng ký</title>
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="" method="post" action="index.php?controller=posts" id="signup-form" class="signup-form" name="signup-form">
                        <h1>Đăng ký</h1>
                        <div class="form-group">
                            <input type="text" class="form-input info required" name="user-name" id="user-name" placeholder="Tên đăng nhập" />
                            <p id="user-name1"></p>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input info required" name="email" id="email" placeholder="Email" />
                            <p id="email1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info required" name="last-name" id="last-name" placeholder="Họ" />
                            <p id="last-name1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info required" name="first-name" id="first-name" placeholder="Tên" />
                            <p id="first-name1"></p>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-input info required" name="tel" id="tel" placeholder="Số điện thoại" />
                            <p id="tel1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info required" name="diachi" id="diachi" placeholder="Địa chỉ" />
                            <p id="diachi1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info required" name="cmt" id="cmt" placeholder="Chứng minh thư" />
                            <p id="cmt1"></p>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input info required" name="password" id="password" pattern=".{8,12}" placeholder="Password" />
                            <input type="checkbox" onclick="showPassword()" id="showpwd"> Hiển thị mật khẩu
                            <p id="password1"></p>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input info required" name="re-password" id="re-password" placeholder="Xác minh lại password" />
                            <p id="re-password1"></p>
                        </div>

                        <div class="form-group">
                            <select class="form-input" name="users" id="users" >
                                <option  style="display:none" disabled selected value>Bạn là...</option>
                                <option value="nguoi_cho_thue">Người cho thuê</option>
                                <option value="nguoi_thue_phong">Người đi thuê</option>
                            </select>
                            <p id="users1"></p>
                        </div>

                        <div class="form-group ">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Đăng ký" onclick="validate()" />
                        </div>

                        <p class="loginhere">
                            Bạn đã có tài khoản? <a href="../dangnhap/dangnhap.html" class="loginhere-link">Đăng nhập</a>
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script src="../assets/javascripts/dangky.js "></script>
</body>

</html>
<?php
var_dump($_POST);