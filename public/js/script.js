let button = document.getElementById('btnCheck');
let login=document.getElementById("loginText");

button.onclick = function (e) {
    $.ajax({
        type: "GET",
        url: "check.php?login="+login.value,
        data: login.value,
        datatype: "text",
        beforeSend: function (xh) {
            xh.setRequestHeader("Ajax-request", "true");
        },
        success: function (response) {
               console.log("Ajax response "+response);
               if(parseInt(response))login.style.background="RED"; else {login.style.background="GREEN";}
        },
        error: function (e) {
            console.log("some errors");
        }
    });
}
