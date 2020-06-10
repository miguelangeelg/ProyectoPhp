$(document).ready(function(){

    var periodo=$("#periodo").val();
    console.log(periodo);
    $.ajax({
        type: "POST",
        url: "../controller/ctrPeriodo.php",
        data: {periodo},
        success: function (response) {
             console.log (response);
        }
    });
    $('#periodo').on('change', function() {
        periodo=$("#periodo").val();
        $.ajax({
            type: "POST",
            url: "../controller/ctrPeriodo.php",
            data: {periodo},
            success: function (response) {
                console.log (response);
            }
        });
      });
})