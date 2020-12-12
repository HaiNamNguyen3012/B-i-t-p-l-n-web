<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dangky.css">
    <title>Đăng ký</title>
</head>

<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="" method="post" id="signup-form" class="signup-form" name="signup-form">
                        <h1>Đăng ký</h1>
                        <?php var_dump($_POST); ?>
                        <div class="form-group">
                            <input type="text" class="form-input info" name="user-name" id="user-name" placeholder="Tên đăng nhập" value="<?php if(isset($_POST['user-name'])) echo htmlspecialchars($_POST['user-name'] ?? '', ENT_QUOTES); ?>" required/>
                            <p id="user-name1"></p>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input info" name="email" id="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>"  required/>
                            <p id="email1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info" name="last-name" id="last-name" placeholder="Họ" value="<?php if(isset($_POST['last-name'])) echo htmlspecialchars($_POST['last-name'] ?? '', ENT_QUOTES); ?>"required/>
                            <p id="last-name1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info" name="first-name" id="first-name" placeholder="Tên" value="<?php if(isset($_POST['first-name'])) echo htmlspecialchars($_POST['first-name'] ?? '', ENT_QUOTES); ?>" required/>
                            <p id="first-name1"></p>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-input info" name="tel" id="tel" placeholder="Số điện thoại" value="<?php if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel'] ?? '', ENT_QUOTES); ?>" required/>
                            <p id="tel1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info" name="diachi" id="diachi" placeholder="Địa chỉ" value="<?php if(isset($_POST['diachi'])) echo htmlspecialchars($_POST['diachi'] ?? '', ENT_QUOTES); ?>" required/>
                            <p id="diachi1"></p>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input info" name="cmt" id="cmt" placeholder="Chứng minh thư" value="<?php if(isset($_POST['cmt'])) echo htmlspecialchars($_POST['cmt'] ?? '', ENT_QUOTES); ?>" required/>
                            <p id="cmt1"></p>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input info" name="password" id="password" pattern=".{8,12}" placeholder="Password" required/>
                            <input type="checkbox" onclick="showPassword()" id="showpwd"> Hiển thị mật khẩu
                            <p id="password1"></p>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input info" name="re-password" id="re-password" placeholder="Xác minh lại password" required/>
                            <p id="re-password1"></p>
                        </div>

                        <div class="form-group">
                            <select class="form-input" name="users" id="users" value="<?php if(isset($_POST['users'])) echo htmlspecialchars($_POST['users'] ?? '', ENT_QUOTES); ?>" required>
                                <option value="users">Bạn là.....</option>
                                <option value="nct">Người cho thuê</option>
                                <option value="ndi">Người đi thuê</option>
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

    <script src="./dangky.js "></script>

    <?php
    /*    $doc = new DomDocument;

        // We need to validate our document before referring to the id
        $doc->validateOnParse = true;
        $doc->Load('dangky.php');

        function screamOut($name,$doc){
            if(isset($_POST[$name])) 
                $doc->getElementById($name)->value = htmlspecialchars($_POST[$name] ?? '', ENT_QUOTES);
            else echo 'bruh';
             //   echo htmlspecialchars($_POST['user-name'] ?? '', ENT_QUOTES);
        }
        // value="<?php// if(isset($_POST['user-name'])) echo htmlspecialchars($_POST['user-name'] ?? '', ENT_QUOTES); "


        screamOut('user-name',$doc);
    


*/
    ?>

</body>

</html>
