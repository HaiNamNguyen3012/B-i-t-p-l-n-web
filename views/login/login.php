<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/stylesheets/dangnhap.css">        
    <title>Đăng nhập</title>
</head>

<body>
    <div class="main">
        <section class="signin">
            <div class="container">
                <div class="signin-content">
                    <form action="" method="post" id="signin-form" class="signin-form" onsubmit="return validate()">
                        <h1>Đăng nhập</h1>
                        <div class="form-group">
                            <input type="text" class="form-input" name="user-name" id="user-name" placeholder="Tên đăng nhập" required/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                        </div>

                        <div class="form-group">
                            <select class="form-input" name="users" id="users">
                                <option  style="display:none" disabled selected value>Bạn là...</option>
                                <option value="nguoi_cho_thue">Người cho thuê</option>
                                <option value="nguoi_thue_phong">Người thuê phòng</option>
                              </select>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me">
                            <label for="remember-me"> Nhớ mật khẩu</label><br>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Đăng nhập" />
                        </div>

                        <p class="loginhere">
                            Bạn chưa có tài khoản? <a href="/bai-tap-lon-web/index.php?controller=register" class="signuphere-link">Đăng ký</a>
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </div>
    
</body>

</html>
