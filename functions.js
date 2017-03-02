$( function() {
  //Droppable example as a Captcha
    $( "#resicon" ).draggable();
    $( "#foldericon" ).droppable({
      drop: function( event, ui ) {
        $( "#pepe" ).html( '<a href="Resume.pdf" target="_blank" id="resume1"><img src="img/download.gif" id="download"/></a>');
        $("#resume1").click(function(){$("#download").animate({width:"10px",opacity:0},1000,function(){$("#download").html();});});
        $("#download").animate({width:"300px",opacity:1},500,function(){//$("#resume1").click();
          });
        $("#resume1").click(function(){
           $("#captcha h1").html("Thank you, fellow human!\nYour Download will begin soon.");
           
          });
      }
    });
    
    $("#Rodhit").click(function(){
    //Example of Each and ToggleClass
    $("li").each(function() {
      $(this).toggleClass( "highlight");// add Class Highlight
      });  
      
    }
                       
                      );
  });
