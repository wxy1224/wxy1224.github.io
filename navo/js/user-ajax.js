$(document).ready(function() {

    $(document).on("click", "#submit-button", function() {
        var user_email = document.getElementById("inputEmail").value;
        var request = {email:user_email};
    
        var request = $.ajax({
            url: '../php/user_handle.php',
            method: 'POST',
            data: request,
            dataType: 'text',
            error: function(error) {
                console.log(error);
            }
        });

        request.success(function(data) {
            document.getElementById("register").innerHTML = data;
        });
    });
});