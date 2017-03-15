$(document).ready(function () {

// stopPropagation
    /*$('#banner').click(function(evt) {
     console.log('click #banner');
     }); // end click

     $('.banner-text').click(function(evt) {
     console.log('click .banner-text');
     }); // end click

     $('.banner-slogan').click(function(evt) {
     evt.stopPropagation();
     console.log('click .banner-slogan');
     });*/


// Advanced Event Management
    /* var myData = {
     firstName : 'Bob',
     lastName : 'Smith'
     } */

    // $('#selector').bind('click', myData, functionName);
    // $('#selector').click(functionName);

    /* $('#banner').bind('click', myData, function(event) {
     console.log(event.data.firstName);
     }); */

    /* $('#banner').click( myData, function(event) {
     console.log(event.data.firstName);
     }); */

    /* $('#banner').bind('click mouseover', function(event) {
     console.log('click/mouseover event');
     }); */

    /* $('#banner').bind({
     'click': function(event) {
     console.log('click  event');
     },
     'mouseover' : function(event) {
     console.log('mouseover event');
     }
     }); */


    // .on( events [, selector ] [, data ], handler )


// Animations and Effects

// Showing and Hiding
    // $('#banner').hide('slow'); // fast, normal, slow = 200, 400, 600
    // $('#banner').hide(5000);
    // show()
    // hide()
    // toggle()
    // ('#banner').toggle(500).toggle(500);


// Fading Elements In and Out
    // fadeIn();
    // fadeOut();
    // fadeToggle()
    // $('#banner').fadeToggle(500).fadeToggle(500);
    // fadeTo()
    // $('#banner').fadeTo(500, 0.3);


// Sliding Elements
    // slideDown()
    // slideUp()
    // slideToggle()
    // $('ul').slideUp(500).slideDown(500);


// Animations

    /* $('.banner-slogan').animate(
     {
         left: '650px',
         opacity: .5,
         fontSize: '24px'
     },
     1500
     ); */

    /* $('#banner div').click(function() {
     $(this).animate(
     {
        left:'+=150px'
     },
     1000);
     }); */

    //border-width: 2px 5px 2px 6px;

    /* $('#banner').animate(
     {
         borderTop: '20px',
         borderRight: '20px',
         borderBottom: '20px',
         borderLeft: '20px',
     },
     1000 );*/

    /*    $('#banner').animate(
     {
     border: '20px'
     },
     1000 ); */


// Easing

    //$('ul').slideUp(3000,'linear');

    // http://gsgd.co.uk/sandbox/jquery/easing/

    /* $('.banner-slogan').animate(
     {
         left: '650px',
         opacity: .35,
         fontSize: '24px'
     },
     5500,
     'easeInBounce' // swing. linear by default
     ); */


    /* $('#banner').fadeOut(3000, function() {
        $('h2').fadeOut(3000);
     }); */


    //$('#banner').fadeOut(3000).fadeIn(3000);

    /* $('.banner-text').animate(
     {
        left: '+=400px',
     },
     1000,
     function() {
         $('h2').fadeOut(1000,
         function() {
            $('.banner-slogan').fadeOut(1000);
         }
         );
     }
     );*/

// delay();
    //$('#banner').fadeOut(3000).delay(3000).fadeIn(3000);


// Improving Your Images

    /* $('img:first').hover(
         function () {
            $('img:first').attr('src','assets/img3.jpg');
         },
         function() {
            $('img:first').attr('src','assets/img0.png');
         }
     );*/

    /*    $('img:first').hover(
     function () {
         var newPhoto = new Image();
         newPhoto.src = 'assets/img3.jpg';
         $('img:first').attr({
             src: newPhoto.src,
             width: newPhoto.width,
             height: newPhoto.height
         });
     },
     function() {
         var oldPhoto = new Image();
         oldPhoto.src = 'assets/img0.png';
         $('img:first').attr({
             src: oldPhoto.src,
             width: oldPhoto.width,
             height: oldPhoto.height
         });
     }
     );*/


// Preloading Images

/*  var preloadImages = [
        'assets/img0.png',
        'assets/img1.jpg',
        'assets/img2.jpg',
        'assets/img3.jpg'];

    var imgs = [];
    for (var i = 0; i < preloadImages.length; i++) {
        imgs[i] = new Image();
        imgs[i].src = preloadImages[i];
    }

    console.log(imgs);

    $('img:first').hover(
        function () {
            var newPhoto = new Image();
            newPhoto.src = preloadImages[3];
            $('img:first').attr({
                src: newPhoto.src,
                width: newPhoto.width,
                height: newPhoto.height
            });
        },
        function () {
            var oldPhoto = new Image();
            oldPhoto.src = preloadImages[0];
            $('img:first').attr({
                src: oldPhoto.src,
                width: oldPhoto.width,
                height: oldPhoto.height
            });
        }
    ); */

}); // document ready end


