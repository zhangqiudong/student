/*
 *
 * Credits to http://css-tricks.com/long-dropdowns-solution/
 *
 */



var maxHeight = 400;

$(function(){
    $(".stu_health").hover(function () {
        $(".dropdown").css("margin-top","495px")
    },function () {
        $(".dropdown").css("margin-top","150px")
    })



    $(".dropdown > li").hover(function() {
        $(this).addClass('drop');

        var $container = $(this),
            $list = $container.find("ul"),
            $anchor = $container.find("a"),
            height = $list.height() * 1.1,       // make sure there is enough room at the bottom
            multiplier = height / maxHeight;     // needs to move faster if list is taller
                                                  // need to save height here so it can revert on mouseout
            $container.data("origHeight", $container.height());

        // so it can retain it's rollover color all the while the dropdown is open
        // $anchor.addClass("hover");

        // make sure dropdown appears directly below parent list item    
        $list.show()
            .css({
                paddingTop: $container.data("origHeight")
            });

        // don't do any animation if list shorter than max

        $container.find("li").hover(function(){

            var offset = $(this).offset();

            $('.sliding-bar').offset(offset);
            $('.sliding-bar').css({height:'61px'});
        });

        $('.sliding-bar').css({opacity:1});

        initMenu();

        if (multiplier > 1) {

            $('.sliding-bar').css({opacity:0});
            $container
                .css({
                    height: maxHeight,
                    overflow: "hidden",

                })
                .mousemove(function(e) {
                    var offset = $container.offset();
                    // alert(offset.top);145

                    var relativeY = ((e.pageY - offset.top) * multiplier) - ($container.data("origHeight") * multiplier);
                    //
                    // alert(relativeY);-3
                    // alert($container.data("origHeight"));56
                    //
                    if (relativeY > $container.data("origHeight")) {
                        // $list.css("top", -relativeY -20+ $container.data("origHeight"));
                        $list.css("top", -relativeY + $container.data("origHeight"));
                    };
                });
        }

    }, function() {
        $(this).removeClass('drop');
        $('.sliding-bar').css({opacity:0});
        var $el = $(this);

        // put things back to normal
        $el
            .height($(this).data("origHeight"))
            .find("ul")
            .css({ top: 0 })
            .hide()
            .end()
            .find("a")
            .removeClass("hover");

    });


    initMenu();
});

var initMenu = function () {

    var $initElem =  $(".dropdown > li").find("li:first-of-type");
    // alert( $initElem.html());
    // var $initElem = $('li:first-of-type');
    var initOffset = $initElem.offset();
    var initSize = {
        width: $initElem.css('width'),
        height: $initElem.css('height')
    }
    $('.sliding-bar')
        .offset(initOffset)
        .css(initSize)
}