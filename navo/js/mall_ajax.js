$(document).ready(function() {

    $(document).on("click", "#submit-button", function() {

        var mall_con = document.getElementById("inputCon").value;
        //alert(mall_con);
        var request = {contact: mall_con};

    
        var request = $.ajax({
            url: '../php/mall_handle.php',
            method: 'POST',
            data: request,
            dataType: 'text',
            error: function(error) {
                console.log(error);
            }
        });

        request.success(function(data) {
            document.getElementById("register").innerHTML = data;
            document.getElementById("inputCon").value = "";
            //alert(data);
        });
    });
});