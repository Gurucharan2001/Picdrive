$(document).ready(function(){
    $(".login-submit-btn").click(function(e){
        e.preventDefault();
        var username = btoa($("#login-email").val());
        var password = btoa($("#login-password").val());
        $.ajax({
            type : "POST",
            url : "php/login.php",
            data : {
                username : username,
                password : password 
            },
            beforeSend : function(){
                $(".login-submit-btn").html("Processing Please Wait...");
                $(".login-submit-btn").attr("disabled","disabled");
            },
            success : function(response){
                if(response.trim() == "Login Success")
                {
                    window.location = "profile/profile.php";
                }
                else if(response.trim() == "Login Panding")
                {
                    $("#login-form").fadeOut(500,function(){
                        $(".login-activation").removeAttr("d-none");
                        $(".login-activate-btn").click(function(){
                            $.ajax({
                                type : "POST",
                                url : "php/activation_check.php",
                                data : {
                                    code : btoa($("#login-code").val()),
                                    username : btoa($username)
                                },
                                beforeSend : function(){
                                    $(".login-activate-btn").html("Please Wait...");
                                    $(".login-activate-btn").attr("disabled","disabled");
                                },
                                success : function(response){
                                    if(response.trim() == "user varified")
                                    {
                                        //code  ...due
                                    }
                                }
                            });
                        });
                    });
                }
                else if(response.trim() == "Wrong Password")
                {
                    //alert("Wrong Password");
                    var txt = document.createTextNode("Wrong Password!!");
                    var box = document.createElement("div");
                    box.className = "alert alert-warning";
                    box.append(txt);
                    $("#login-notice").append(box);
                    $("#login-form").trigger("reset");
                    $(".login-submit-btn").removeAttr("disabled");
                    $(".login-submit-btn").html("LOGIN");
                    setTimeout(function(){
                        $("#login-notice").fadeOut();
                    },5000);
                }
                else
                {
                    var text = document.createTextNode("User Not Found Please Signup again!");
                    var alert_box = document.createElement("DIV");
                    alert_box.className = "alert alert-warning";
                    alert_box.append(text);
                    $("#login-notice").append(alert_box);
                    $("#login-form").trigger("reset");
                    $(".login-submit-btn").html("LOGIN");
                    $(".login-submit-btn").removeAttr("disabled");
                    setTimeout(function(){
                        $("#login-notice").fadeOut();
                    },5000);
                }
            }
        })
    });
});