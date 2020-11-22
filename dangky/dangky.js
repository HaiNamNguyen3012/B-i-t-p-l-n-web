function validate() {
    var username = document.forms["signup-form"]["user-name"].value;
    var email = document.forms["signup-form"]["email"].value;
    var lastname = document.forms["signup-form"]["last-name"].value;
    var firstname = document.forms["signup-form"]["first-name"].value;
    var tel = document.forms["signup-form"]["tel"].value;
    var diachi = document.forms["signup-form"]["diachi"].value;
    var cmt = document.forms["signup-form"]["cmt"].value;
    var password = document.forms["signup-form"]["password"].value;
    var repassword = document.forms["signup-form"]["re-password"].value;
    var users = document.forms["signup-form"]["users"].value;
    if (username === '') {
        document.querySelector("#user-name1").innerHTML = "Vui lòng nhập tên đăng nhập";
        document.forms["signup-form"]["user-name"].style.borderColor = "red";
        return false;
    }
    if (email === '') {
        document.querySelector("#email1").innerHTML = "Vui lòng nhập email";
        document.forms["signup-form"]["email"].style.borderColor = "red";
        return false;
    }
    if (lastname === '') {
        document.querySelector("#last-name1").innerHTML = "Vui lòng nhập họ";
        document.forms["signup-form"]["last-name"].style.borderColor = "red";
        return false;
    }
    if (firstname === '') {
        document.querySelector("#first-name1").innerHTML = "Vui lòng nhập tên";
        document.forms["signup-form"]["first-name"].style.borderColor = "red";
        return false;
    }
    if (tel === '') {
        document.querySelector("#tel1").innerHTML = "Vui lòng nhập số điện thoại";
        document.forms["signup-form"]["tel"].style.borderColor = "red";
        return false;
    }
    if (diachi === '') {
        document.querySelector("#cmt1").innerHTML = "Vui lòng nhập địa chỉ";
        document.forms["signup-form"]["diachi"].style.borderColor = "red";
        return false;
    }
    if (cmt === '') {
        document.querySelector("#cmt1").innerHTML = "Vui lòng nhập chứng minh thư";
        document.forms["signup-form"]["cmt"].style.borderColor = "red";
        return false;
    }
    if (password === '') {
        document.querySelector("#password1").innerHTML = "Vui lòng nhập password";
        document.forms["signup-form"]["password"].style.borderColor = "red";
        return false;
    }
    if (repassword === '') {
        document.querySelector("#re-password1").innerHTML = "Vui lòng nhập xác minh password";
        document.forms["signup-form"]["re-password"].style.borderColor = "red";
        return false;
    }

    if (repassword !== password) {
        document.querySelector("#re-password1").innerHTML = "Password bạn xác nhận đã sai. Vui lòng xác minh lại";
        document.forms["signup-form"]["re-password"].style.borderColor = "red";
        return false;
    }

    if (users === 'Bạn là.....') {
        document.querySelector("#users1").innerHTML = "Vui lòng chọn bạn là người cho thuê hay đi thuê";
        document.forms["signup-form"]["users"].style.borderColor = "red";
        return false;
    }
}



function showPassword() {
    var password = document.forms["signup-form"]["password"];
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}