<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./icon/css/all.min.css">
        <link rel="stylesheet" href="./assets/stylesheets/nguoichothue.css">
        <link rel="stylesheet" href="./dangtin.html">
        <link rel="stylesheet" href="./assets/stylesheets/trangcstt.css">
        <title>Trang thông tin cá nhân</title>
    </head>
    <body> 
            <header class="container-fluid">
                <div class="container">
                    <div class="row up">
                        <div class="col-sm-4 left">
                            <h1>
                                <a href="../nguoichothue/nguoichothue.html">TT24H</a>
                            </h1>
                        </div>
                        <div class="col-sm-8 right">
                            <ul>
                              <li>
                                  <a href="../nguoichothue/nguoichothue.html">
                                      <i class="fas fa-home">Trang chủ</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"> Tôi cho thuê </i>
                                    </a>    
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-comment-alt">Nhắn tin</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-bell">Thông báo</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row down">
                        <div class="col-sm-6 left">
                            <input type="search" name="search" id="search" placeholder="Tìm kiếm">
                            <span id="icon-search">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <div class="col-sm-3 center">
                            <a href="../dangnhap/dangnhap.html">
                                <i class="fas fa-user-secret"> 
                                    Đăng nhập
                                </i>
                            </a>
                        </div>
                        <div class="col-sm-2 right">
                            <a href="../nguoichothue/dangtin.html">
                                <i class="far fa-edit">Đăng tin</i>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="nav-link" href="../nguoichothue/nguoichothue.html">TT24</a>
                <a class="nav-link" href="#"> >> Thông tin cá nhân</a>
            </nav>
            <div class="main-container">
                <div class="container cstt">
                    <div class="newtitle">
                        <div class="title">Thông tin cá nhân</div>
                    </div>
                    <div class="information" >
                        <div class="col-xs-12">
                                <form method="post" action="" class="needs-validation" novalidate>
                                    <div class="form-group">
                                      <label for="ten_tai_khoan">Tên đăng nhập</label>
                                      <input type="text" class="form-control" id="ten_tai_khoan" name="ten_tai_khoan" value="<?php echo $info->ten_tai_khoan ?>" required>
                                      <div class="valid-feedback">Hợp lệ</div>
                                      <div class="invalid-feedback">Vui lòng nhập thông tin</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ho">Họ</label>
                                        <input type="text" class="form-control" id="ho" name="ho" value="<?php echo $info->ho ?>" required>
                                        <div class="valid-feedback">Hợp lệ</div>
                                        <div class="invalid-feedback">Vui lòng nhập thông tin</div>
                                      </div>
                                      <div class="form-group">
                                        <label for="ten">Tên</label>
                                        <input type="text" class="form-control" id="ten" name="ten" value="<?php echo $info->ten ?>"required>
                                        <div class="valid-feedback">Hợp lệ</div>
                                        <div class="invalid-feedback">Vui lòng nhập thông tin</div>
                                      </div>
                                      <div class="form-group">
                                        <label for="sdt">Số điện thoại</label>
                                        <input type="text" class="form-control" id="sdt" name="sdt" value="<?php echo $info->sdt ?>" required>
                                        <div class="valid-feedback">Hợp lệ</div>
                                        <div class="invalid-feedback">Vui lòng nhập thông tin</div>
                                      </div>
                                      <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $info->email ?>" required autocomplete="on">
                                        <div class="valid-feedback">Hợp lệ</div>
                                        <div class="invalid-feedback">Vui lòng nhập thông tin</div>
                                      </div>
                                      <div class="form-group">
                                        <label for="dia_chi">Địa chỉ</label>
                                        <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="<?php echo $info->dia_chi ?>" required>
                                        <div class="valid-feedback">Hợp lệ</div>
                                        <div class="invalid-feedback">Vui lòng nhập thông tin</div>
                                      </div>
                                      <div class="form-group">
                                        <label for="so_CCCD">Chứng minh thư</label>
                                        <input type="text" class="form-control" id="so_CCCD" name="so_CCCD" value="<?php echo $info->so_CCCD ?>" required>
                                        <div class="valid-feedback">Hợp lệ</div>
                                        <div class="invalid-feedback">Vui lòng nhập thông tin</div>
                                      </div>
                                    <button type="submit" class="btn btn-warning">Lưu thay đổi</button>
                            </form>
                        </div>
                    </div>
                    <?php var_dump($_POST); ?>
                    <div class="newpassword" >
                         <div class="title">Thay đổi mật khẩu</div>
                         <div class="col-xs-12 doipassword">
                            <form action="" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="password">Mật khẩu hiện tại</label>
                                <input type="password" class="form-control" name="password" id="password" pattern=".{8,12}"  required />
                                <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                                <div class="valid-feedback">Hợp lệ</div>
                            </div>
    
                            <div class="form-group">
                                <label for="newpassword">Mật khẩu mới</label>
                                <input type="password" class="form-control" name="newpassword" id="newpassword" pattern=".{8,12}" onkeyup='check();' required />
                                <span toggle="#newpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <div class="valid-feedback">Hợp lệ</div>
                                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                            </div>
                            <div class="form-group">
                                <label for="re-password">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="re-password" id="re-password" pattern=".{8,12}" onkeyup='check();' required />
                                <span toggle="#re-password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <div class="valid-feedback">Hợp lệ</div>
                                <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
                                <span id="message"></span>
                            </div>
                            <button type="submit" class="btn btn-warning">Lưu thay đổi</button>
                            </form>
                         </div>
                    </div>
                            
                         
                
                </div>
            </div>
            <script src="./trangcstt.js "></script>
    </body>
    </html>
