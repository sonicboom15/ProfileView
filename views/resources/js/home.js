$(document).ready(function() {
    var $table = $('#profiletable');
    $.ajax({
        url: '../php/getdetails.php',
        type: 'get',
        success: function(response) {
            data = JSON.parse(response);
            for( var i = 0; i<data.profiles.length; i++){
                $table.find('#profilebody').append('<tr>');
                $table.find('#profilebody').append('<td>'+ data.profiles[i]['email'] + '</td>');
                $table.find('#profilebody').append('<td>'+ data.profiles[i]['contact'] + '</td>');
                $table.find('#profilebody').append('<td>'+ data.profiles[i]['dob'] + '</td>');
                $table.find('#profilebody').append('<td><input type="button" id=" edit"class="btn btn-success" itemId="'+data.profiles[i]['id']+'" value="Edit"/><input type="button" id=" edit"class="btn btn-danger" itemId="'+data.profiles[i]['id']+'" value="Delete"/></td>');
                $table.find('#profilebody').append('</tr>');
            }
        }
    });
    $("edit").click(function(){{
            alert('clicked');
        }
    });
});
