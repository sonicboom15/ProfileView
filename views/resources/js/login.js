$(document).ready(function(){
    $("#buttonlogin").click(function(){
            var username = $("#username").val().trim();
            var password = $("#pass").val().trim();
    
            if( username != "" && password != "" ){
                $.ajax({
                    url:'../login.php',
                    type:'post',
                    data:{username:username,password:password},
                    success:function(response){
                        var msg = "";
                        if(response == 1){
                            window.location = "home.php";
                        }else{
                            msg = "Error logging in";
                        }
                        $("#message").html(msg);
                        $("#message").show();
                    }
                });
            }
        });
    });