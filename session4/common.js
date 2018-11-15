$(document).ready(function(){
    $('.click').click(function(){    
        $("#img").toggle(function()
          {$('#img').animate({
        width : "400px",
        margin : "300",});
        });
    });
   
 });