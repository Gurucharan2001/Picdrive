$(document).ready(function(){
    $("#email").on("change",function(){
        var email = btoa($(this).val());
        if(email != "")
        {
            $.ajax({
                type : "POST",
                url : "php/check_user.php",
                data : {
                    username : email
                },
                beforeSend : function(){
                    $("#load-icon").removeClass("d-none");
                },
                success : function(res){
                    if(res.trim() == "User found")
                    {
                        $("#load-icon").removeClass("fa fa-circle-o-notch fa-spin");
                        $("#load-icon").addClass("fa fa-times-circle text-warning");
                        $(".submit-btn").attr("disabled","disabled");
                    }
                    else{
                        $("#load-icon").removeClass("fa fa-circle-o-notch fa-spin");
                        $("#load-icon").addClass("fa fa-check-circle text-primary");
                        $(".submit-btn").removeAttr("disabled");
                    }
                }
            })
        }
    });
});