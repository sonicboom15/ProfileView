$(document).ready(function(){
    $("#buttonlogin").click(function(){
            var username = $("#username").val().trim();
            var password = $("#pass").val().trim();

            if(username=="" || password==""){
                msg = "Enter valid Username/Password";
                $("#message").html(msg);
                $("#message").show();
            }else{
    
            if( username != "" && password != "" ){
                $.ajax({
                    url:'../php/login.php',
                    type:'post',
                    data:{username:username,password:password},
                    success:function(response){
                        var msg = "";
                        if(response == 1){
                            window.location = "home.html";
                        }else{
                            msg = "Error logging in";
                            $("#message").html(msg);
                            $("#message").show();
                        }
                    }
                });
            }
        }
        });
    });