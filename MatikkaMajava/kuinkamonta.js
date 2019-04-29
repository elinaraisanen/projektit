function arvoJutut() {
    //laitetaan kuvavaihtoehdot
	     var a = [
                "",
                "<img src='/img/kuinkamonta/ankkuri.png' class='img-fluid' alt='ankkuri'>",
                "<img src='/img/kuinkamonta/aurinko.png' class='img-fluid' alt='aurinko'>",
                "<img src='/img/kuinkamonta/kissa.png' class='img-fluid' alt='kissa'>",
                "<img src='/img/kuinkamonta/koira.png' class='img-fluid' alt='koira'>",
                "<img src='/img/kuinkamonta/pilvi.png' class='img-fluid' alt='pilvi'>",
                "<img src='/img/kuinkamonta/pupu.png' class='img-fluid' alt='pupu'>"
        ];
    var n;
    var r=[];
    //Valitaan kuva
    var i = Math.floor((Math.random() * 6) + 1);
    
    //Tulostetaan valittu kuva
    var montakoKuvaa = Math.floor((Math.random()*10) +1);
    for (n=1; n<=montakoKuvaa ; ++n)
    {
      
      r.push(a[i]);
    
    }
    var s = "";
    for (i = 0; i < montakoKuvaa; i++)
    {
      s += r[i] + " ";
    }
    $("#kuvat").html(s);
}

//määritellään radio buttonit

$('input[name=radioName]:checked', '#myForm').val()
$('#myForm input').on('change', function() {
    
   var vastaus = $('input[name=radioName]:checked', '#myForm').val();
   
   var kuvat = $('#kuvat').children().length;
   
   //pop up ikkunat
   
   if (kuvat === 0) {
       swal({
           title: "Huom!",
           text: "Paina painiketta",
           icon: "warning",
           button: "Jatka tästä",
       });
   
   $("#vastaus").html(""); 
  $('input').prop('checked', false);
   
   }else if (vastaus == kuvat) {
    swal({
  title: "Oikein!",
  text: "Upeaa, osasit hienosti!",
  icon: "success",
  button: "Jatka tästä",

     
});
   
  $("#kuvat").html(""); 
  $('input').prop('checked', false);

   }else
     swal({
  title: "Väärin!",
  text: "Voi ei, väärin meni. Yritä uudelleen!",
  icon: "error",
  button: "Yritä uudelleen",
  
  
});


  
});