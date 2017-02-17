$(document).ready(function(){


// Start  show/hide  add item panel
    $("#addB,#addBusket,#cancel").click(function(){
    $("#addItem").toggle(1200);
    });

//  End  show/hide









/* START Accordition*/

    $(".accordion p").hide();
    $(".accordion h3").click(function(){

                $(this).next("p").slideToggle(500)
               .siblings("p:visible").slideUp(1400);      
 });


//Hide any click outside
//$('div:not(.accordion)').click(function(){
 // $('.accordion p').slideUp(1400); /*.css('visibility','hidden');*/
//});

/*End of accordition*/















//  document  ready 
});
