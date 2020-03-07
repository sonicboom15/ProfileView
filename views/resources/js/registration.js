
$('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
});
$(document).ready(function(){
        $("#buttonregister").click(function(){
                var username = $("#username").val().trim();
                var password = $("#pass").val().trim();
                var confirmpassword = $("#confirmpass").val().trim();
                var email = $("#email").val().trim();
                var number = $("#number").val().trim();
                var dob = $("#datepicker").val().trim();
                
                if(username == ""){
                        msg = "Enter valid username";
                        $("#message").html(msg);
                        $("#message").show();
                }else{
                        if(password == ""){
                                msg = "Enter valid password";
                                $("#message").html(msg);
                                $("#message").show();
                        }else{
                                if(confirmpassword == "" && confirmpassword != password){
                                        msg = "Passwords dont match";
                                        $("#message").html(msg);
                                        $("#message").show();
                                }else{
                                        if(email == "" ){
                                                msg = "Enter valid email";
                                                $("#message").html(msg);
                                                $("#message").show();
                                        }else{
                                                if(number == "" ){
                                                        msg = "Enter valid contact number";
                                                        $("#message").html(msg);
                                                        $("#message").show();
                                                }else{
                                                        if(dob == "" ){
                                                                msg = "Enter valid date of birth";
                                                                $("#message").html(msg);
                                                                $("#message").show();
                                                        }else{
                                                                var data = new Object();
                                                                data.username = username;
                                                                data.password = password;
                                                                data.confirmpassword = confirmpassword;
                                                                data.email = email;
                                                                data.number = number;
                                                                data.dob = dob;
                                                                payload = {"payload":data}
                                                                console.log(payload);
                                                                $.ajax({
                                                                        url:'../php/registration.php',
                                                                        type:'post',
                                                                        data: payload,
                                                                        success:function(response){
                                                                                var msg = "";
                                                                                if(response == 1){
                                                                                        window.location = "index.html";
                                                                                }else{
                                                                                        msg = "Error registering";
                                                                                        $("#message").html(msg);
                                                                                        $("#message").show();
                                                                                }
                                                                        }
                                                                });
                                                        }
                                                }
                                        }
                                }
                        }
                }
        });
});