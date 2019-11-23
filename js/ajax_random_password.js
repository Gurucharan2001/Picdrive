$(document).ready(function(){
    $(".generate-btn").click(function(e){
        e.preventDefault();
        $("#password").attr("type","text");
        $(".eye-icon").removeClass("fa fa-eye");
        $(".eye-icon").addClass("fa fa-eye-slash");
        $(".eye-icon").css({
            color:"black"
        });
        $.ajax({
            type : "POST",
            url : "php/random_password.php",
            beforeSend : function(){
                $(".eye-icon").removeClass("fa fa-eye");
                $(".eye-icon").addClass("fa fa-spinner fa-spin");
            },
            success : function(response){
                $(".eye-icon").removeClass("fa fa-spinner fa-spin");
                $(".eye-icon").addClass("fa fa-eye");
                $("#password").val(response);
            }
        });
    })
});

