
$(document).ready(function () {

    var oikeaVastaus = 1;


    $(".vastaus").click(function () {
        estaVastaus($(this));
        var vastaus = $(this).attr("data-vastaus");
        if (vastaus === "1") {
        //oikein
            $(this).addClass("oikein");
            
               $("#oikeaVastaus").html("Oikeita vastauksia: " + oikeaVastaus + "/10");
             
            oikeaVastaus++
       
            
        } else {
        //väärin
            $(this).addClass("vaarin");
            
        }
        
        


        function estaVastaus(elementti) {

            var vanhempi = elementti.parent();

            vanhempi.children().each(function () {
                $(this).removeClass("klikkaa");
                $(this).off("click");

            });
        }
    });
    
    $(document).ready(function(e){

//päivitysnappi, jolla visa voidaan käynnistää uudestaan
 $("#reset").click(function(){
      document.location.reload(true);
      //sivu srollaantuu ylös
      $(document).ready(function(){
$(this).scrollTop(0);
});
});


});



});
