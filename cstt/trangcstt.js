(function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
  function check() {
    var pw1 = document.getElementById("newpassword").value;
    var pw2 = document.getElementById("re-password").value;

    if (pw1 == pw2) {
       document.getElementById("message").style.color = 'green';
       document.getElementById("message").innerHTML = 'Mật khẩu đã khớp';
    }

    else
        {
            document.getElementById("message").style.color = 'red';
            document.getElementById("message").innerHTML = 'Mật khẩu không khớp';
    }
        }
 