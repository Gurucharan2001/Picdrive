//password icon coding
$(document).ready(function(){
    $(".eye-icon").click(function(){
        var eye_icon = $("#password").attr("type");
        if(eye_icon == "password")
        {
            $("#password").attr("type","text");
            $(".eye-icon").removeClass("fa fa-eye");
            $(".eye-icon").addClass("fa fa-eye-slash");
            $(".eye-icon").css({
                color:"black"
            })
        }
        else{
            $("#password").attr("type","password");
            $(".eye-icon").removeClass("fa fa-eye-slash");
            $(".eye-icon").addClass("fa fa-eye");
            $(".eye-icon").css({
                color:"#ccc"
            })
        }
    });
});

$(document).ready(function(){
    $(".show-icon").click(function(){
        var get_attr = $("#login-password").attr("type");
        if(get_attr == "password")
        {
            $("#login-password").attr("type","text");
            $(".show-icon").removeClass("fa fa-eye");
            $(".show-icon").addClass("fa fa-eye-slash");
            $(".show-icon").css({
                color:"black"
            })
        }
        else{
            $("#login-password").attr("type","password");
            $(".show-icon").removeClass("fa fa-eye-slash");
            $(".show-icon").addClass("fa fa-eye");
            $(".show-icon").css({
                color:"#ccc"
            })
        }
    });
});