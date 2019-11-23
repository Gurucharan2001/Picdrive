$(document).ready(function(){
    $(".submit-btn").click(function(e){
        e.preventDefault();
        $.ajax({
            type : "POST",
            url : "php/signup.php",
            data : {
                fullname : btoa($("#fullname").val()),
                username : btoa($("#email").val()),
                password : btoa($("#password").val())
            },
            beforeSend : function(){
                $(".submit-btn").html("Please Wait....");
                $(".submit-btn").attr("disabled","disabled");
            },
            success : function(response){
                if(response.trim() == "Signup Success")
                {
                    $("#signup-form").fadeOut(500,function(){
                        $(".activation-box").removeClass("d-none");
                    });
                }
                else{
                    var message_box = document.createElement("DIV");
                    message_box.className = "alert alert-warning";
                    message_box.innerHTML = "<b>Somthing Went Wrong please try again later</b>";
                    $(".signup-alert").append(message_box);
                    $(".submit-btn").html("REGISTER NOW");
                    $("form").trigger("reset");
                    $("#load-icon").addClass("d-none");
                    setTimeout(function(){
                        $(".signup-alert").addClass("d-none");
                    },2000);
                }
            }
        });
    });
});