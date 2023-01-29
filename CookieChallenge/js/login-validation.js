function loginVal (){
    var alertVar = document.getElementById('alert-login-div');
    $.ajax ({
        url: "../cookies.php",
        dataType: 'json',
        data: {method: "valCookie"},
        type: "POST",
        success: function(result){
            if(result == true){
                window.location.assign("admin.php");
            }else if(result == false){
                alertVar.style.display = 'block';
            }
        }
    });
}