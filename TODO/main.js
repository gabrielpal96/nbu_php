$(document).ready(function () {

    $("#signup_button").click(function (event) {
        event.preventDefault();
        $.ajax({
            url:"register.php",
            method:"POST",
            data: $("form").serialize(),
            success: function (data) {
              $("#signum_msg").html(data);
               window.location.href="login.php";
            }
        })
        // window.location.href="index.php";
    })
    $("#login").click(function (event) {
        event.preventDefault();
        var email=$("#email").val();
        var pass=$("#password").val();
        $.ajax({
            url:"loginAction.php",
            method:"POST",
            data:{userLogin:1,userEmail:email,userPassword:pass},
            success:function (data) {
                if(data=="tretsadasdasde"){

                    window.location.href="index.php";
                }
            }
        })
    })
    $("#addTODO").click(function (event) {
        event.preventDefault();
        $.ajax({
            url:"addAction.php",
            method:"POST",
            data: $("form").serialize(),
            success: function (data) {

                window.location.href="index.php";
            }
        })
    })
})

