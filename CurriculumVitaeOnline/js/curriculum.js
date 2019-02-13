$(document).ready(function(){

  $("#titulo_form").click(function(){
    $("#dformacion").fadeToggle("slow");
    $("#titulo_form").toggleClass("clase_borde_inferior");
  });

  $("#titulo_exp").click(function(){
    $("#dexperiencia").fadeToggle("slow");
    $("#titulo_exp").toggleClass("clase_borde_inferior");
  });

  $("#titulo_idi").click(function(){
    $("#didiomas").fadeToggle("slow");
    $("#titulo_idi").toggleClass("clase_borde_inferior");
  });

  $("#titulo_apt").click(function(){
    $("#daptitudes").fadeToggle("slow");
    $("#titulo_apt").toggleClass("clase_borde_inferior");
  });

//cambiar el estilo de css mediante jquery o javascript


});
