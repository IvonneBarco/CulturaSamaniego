$(document).ready(function(){

    $("#DivSamaniego").hide();           
    $('#DivEcologia').hide();
    $('#DivGastronomia').hide();
    $('#DivSemanaSanta').hide();
    $('#DivFiestasT').hide();
    $('#DivFiestasP').hide();
    $('#DivCultural').hide();
    $('#DivNiño').hide();
    $('#DivPaseos').hide();
    $('#DivCarnavales').hide();

  
    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('.scrollup').fadeIn();
        }else{
            $('.scrollup').fadeOut();
        }
    });
  
    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
    });
    

    /*===========FUNCIÓN FECHA ============*/
    var fecha = new Date();
    var cad = fecha.getFullYear() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getDate();

    $('#fecreg').val(cad);
    
    /*$( "#datepicker" ).datepicker();
    changeYear: true,
        defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
    });*/

    // Inicio de Sesión
    $(function () {
        $("#sesion").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "clip",
                duration: 1000
            }
        });

        $("#btnSesion").click(function () {
            $("#sesion").dialog("open");
        });
    });

    // galeria

    $("#btn1").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();  
        $("#DivSamaniego").show(); 
    });

    $("#btn2").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();           
        $('#DivEcologia').show();  
    });

    $("#btn3").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();          
        $('#DivGastronomia').show();  
    });

    $("#btn4").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide(); 
        $('#DivSemanaSanta').show();  
    });

    $("#btn5").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $('#DivFiestasT').show();  
    });

    $("#btn6").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide(); 
        $('#DivFiestasP').show();  
    });

    $("#btn7").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $('#DivCultural').show();  
    });

    $("#btn8").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $('#DivNiño').show();  
    });

    $("#btn9").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $('#DivPaseos').show();  
    });

    $("#btn10").click(function(evt){
        evt.preventDefault();
        $("#DivGaleria").hide();
        $('#DivCarnavales').show();  
    });

    
    $(function() {
        $('#slides').slidesjs({
            width: 940,
            height: 528,
            play: {
                active: true,
                auto: true,
                interval: 4000,
                swap: true
            }
        });
    });

    $(function() {
        $( "#datepicker" ).datepicker();
    });



});