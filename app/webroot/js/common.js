$(function() {
    $( ".birthdate" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:-10"
    });



    $("#Menu").popupmenu();


    $(".togglebox").toggle('click',function(e){
        $(".login-box").hide("slow");
        $(".forgotpass-box").show("slow");

    },function(){
        $(".login-box").show("slow");
        $(".forgotpass-box").hide("slow");
    });


});
