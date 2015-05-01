  $(function() {

   $('.nav').click(function() {
        var $active = $('#slideshow IMG.active');
        var $nav;
    
       if($(this).text() == 'PREV'){
            $nav = $active.prev();
           if($active.is(":first-child"))$nav = $("IMG:last-child");
       }
       else {
            $nav = $active.next();     
           if($active.is(":last-child"))$nav = $("IMG:first-child");
       }
        $active.addClass('last-active');
       console.log($nav);
        $nav.css({opacity: 0.0})
            .addClass('active')
            .stop(0,1)
            .animate({opacity: 1.0}, 1000, function() {
                $active.removeClass('active last-active');
            }); 

    }); 
    });