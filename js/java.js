$(document).ready(function() {
    var navOpen = false;
    $('.toggle-nav').click(function() {
        if (navOpen == false) {
            $('.wrapper').css("position", "absolute").animate({
                left: "30%"
            });
            $(this).animate({
                left: "30%"
            }).removeClass("entypo-menu").addClass("entypo-cancel");
            $('nav').animate({
                left: "0%"
            });
        navOpen = true;
        } 
        else {
            $('.wrapper').animate({
                left: "0%"
            }, function() {
            $(this).css("position", "relative");
            });
            $(this).animate({
            left: "0%"
            }).removeClass("entypo-cancel").addClass("entypo-menu");
            $('nav').animate({
            left: "-30%"
            });
            navOpen = false;
        }
    });

    // Smooth Scrolling
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
        return false;
    });  
    
          $(document).ready(function(){
        $('#opretBruger').hide();
        $('#buttonOpretBruger').click(function(){

            $('#opretBruger').toggle();
        });
    });

//    var panels = $('.user-infos');
//    var panelsButton = $('.dropdown-user');
//    panels.hide();
//
//    //Click dropdown
//    panelsButton.click(function() {
//        //get data-for attribute
//        var dataFor = $(this).attr('data-for');
//        var idFor = $(dataFor);
//
//        //current button
//        var currentButton = $(this);
//        idFor.slideToggle(400, function() {
//            //Completed slidetoggle
//            if(idFor.is(':visible'))
//            {
//                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
//            }
//            else
//            {
//                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
//            }
//        })
//    });

});