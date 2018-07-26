$(function () {
    $("#btnRegister").click(function (e) {
        e.preventDefault();
        var form = $("#frmRegister");
        const formdata = $("#frmRegister").serialize();
        console.log(formdata);
        $.ajax({
            url: "../controller/registerController.php",
            type:"POST",
            data:formdata,
            success:function(ret){
                alert("Registered Successfully!");
                url = "http://localhost/act2/views/login.php";
                    $( location ).attr("href", url);
            }
        });
    });
    $("#btnLogin").on("click",function(e){
        e.preventDefault();
        alert("clicked");
        const formdata = $("#frmLogin").serialize();
        $.ajax({
            url: "../controller/loginController.php",
            type:"POST",
            data:formdata,
            success:function(ret){
                alert(ret);
                const val = parseInt(ret);
                if(val===1){
                    url = "http://localhost/act2/views/admin.php";
                    $( location ).attr("href", url);
                }else if(val===2){
                    url = "http://localhost/act2/views/client.php";
                    $( location ).attr("href", url);
                }
                else{
                    alert("INVALID USER AND PASSWORD");
                    url = "http://localhost/act2/views/login.php";
                    $( location ).attr("href", url);
                }
            }
        });
    });
});

