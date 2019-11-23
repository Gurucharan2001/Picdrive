$(document).ready(function(){
    $(".activate-btn").click(function(){
        var code = btoa($("#code").val());
        var username = btoa($("#email").val());
        $.ajax({
            type : "POST",
            url : "php/activation_check.php",
            data : {
                code : code,
                username : username
            },
            beforeSend : function(){
                $(".activate-btn").html("Please Wait,We are checking...");
            },
            success : function(response){
                alert(response);
            }
        })
    });
});
