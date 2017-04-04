jQuery(document).ready(function ($) {

    // Introducing JSONP = JSON with padding

    // Adding a Flickr Feed to Your Site



    // Constructing the URL

  var URL = "http://api.flickr.com/services/feeds/photos_public.gne";
    var ID = "25053835@N03";
    var jsonFormat = "&format=json&jsoncallback=?";
    var ajaxURL = URL + "?id=" + ID + jsonFormat;


    // Using the $.getJSON() Function

  $.getJSON(ajaxURL,function(data) {
        console.log(data);
        $('#banner').text(data.title).wrapInner('<h1>');
        $.each(data.items,function(i,photo) {
            var photoHTML = '<span class="image">';
            photoHTML += '<a href="' + photo.link + '">';
            photoHTML += '<img src="' + photo.media.m.replace('_m.', '_s.') + '">';
            photoHTML += '</a></span>';
            $('#banner').append(photoHTML);
        });
    });



    // Using the $.get() Function

/*  $.get(ajaxURL,function(data) {
        console.log(data);
        $('#banner').text(data.title).wrapInner('<h1>');
        $.each(data.items,function(i,photo) {
            var photoHTML = '<span class="image">';
            photoHTML += '<a href="' + photo.link + '">';
            photoHTML += '<img src="' + photo.media.m.replace('_m.', '_s.') + '">';
            photoHTML += '</a></span>';
            $('#banner').append(photoHTML);
        });
    }, 'json'); */







    // Google Maps


    // https://itouchmap.com/latlong.html
    // www.pittss.lv/jquery/gomap/
    // http://gmap3.net/



    // Adding Google Maps to Your Site with goMap

    $('#map').goMap({
        // Setting a Location for the Map
//      latitude : 48.464717,
//      longitude : 35.046183,
        address: 'Dnipro, Ukraine',
        zoom: 14,

        // Other GoMap Options
        maptype : 'ROADMAP', // ‘HYBRID’, ‘ROADMAP’, ‘SATELLITE’, or ‘TERRAIN’
        scaleControl : true,
        navigationControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        //mapTypeControl : false
        mapTypeControlOptions: {
            position: 'TOP_LEFT',
            style: 'DROPDOWN_MENU'
        },

        // Adding Markers
        markers : [
            {
                latitude : 48.464717,
                longitude : 35.046183,
//              address: 'Dnipro, Ukraine',
                title : 'Dnipro, Ukraine',

                // Adding Information Windows to Markers
                html : {
                    content: '<p>A fun place to play</p>',
                    popup: true
                }
                },
            {
//              latitude : 48.464717,
//              longitude : 35.046183,
                address: 'Dnipro, Ukraine, Shevchenko str.',
                title : 'Dnipro, Ukraine, Shevchenko str.',

                // Adding Information Windows to Markers
                html : {
                    content : '<p>A fun place to play</p>',
                    popup : true
                }
            }
        ]
    });


    // Adding Markers Dynamically
    $('#map').click(function () {
        $.goMap.createMarker({
            address: 'Dnipro, Soborna sq., Ukraine',
            title : 'Dnipro, Soborna sq., Ukraine'
        });
    });


    // Remove Markers
    $('#removeMarkers').click(function() {
        $.goMap.clearMarkers();
    }); // end click










    // Useful jQuery Tips and Information


    // $() Is the Same as jQuery()
    // jQuery('p').css('color','#F03'); = $('p').css('color','#F03');


    // Selection of page elements


    // bad practise
    // $('#tooltip').html('<p>An aardvark</p>');
    // $('#tooltip').fadeIn(250);
    // $('#tooltip').animate({left : '100px'},250);

    // good practise
    // 1) Use jQuery’s chaining abilities:
    // $('#tooltip').html('<p>An aardvark</p>').fadeIn(250).animate({left : 100px},250);


    // 2) Saving selections into variables:
    // var $tooltip = $('#tooltip');
    // tooltip.html('<p>An aardvark</p>');
    // tooltip.fadeIn(250);
    // tooltip.animate({left : 100px},250);

    // Storing $(this) into a variable
    /*  $('a').click(function() {
        var $this = $(this); // store a reference to the <a> tag
        $this.css('outline','2px solid red');
        var href = $this.attr('href');
        window.open(href);
        return false;
    }) */



    // Adding Content as Few Times as Possible

    // bad practise
    // add div to end of element
    // $('#elemForTooltip').append('<div id="tooltip"></div>');
    // add headline to tooltip
    // $('#tooltip').append('<h2>The tooltip title</h2>');
    // add contents
    // $('#tooltip').append('<p>The tooltip contents here</p>');

    // good practise
    // var tooltip = '<div id="tooltip"><h2>The tooltip title</h2><p>The tooltip contents here</p></div>';
    // $('#elemForTooltip').append(tooltip);



    // Optimizing Your Selectors

    // 1)Use ID selectors if at all possible:
    // $('#banner');

    // 2) Use IDs first, as part of a descendent selector:
    // $('#banner .banner-text');

    // 3) Use the .find() function:
    // $('#banner').find('.banner-text');


    // Using the jQuery Docs

    // jQuery Core         (http://api.jquery.com/category/core/)
    // Selectors           (http://api.jquery.com/category/selectors/)
    // Attributes          (http://api.jquery.com/category/attributes/)
    // Traversing          (http://api.jquery.com/category/traversing/)
    // Manipulation        (http://api.jquery.com/category/manipulation/)
    // The CSS page        (http://api.jquery.com/category/css/)
    // Events              (http://api.jquery.com/category/events/)
    // The Effects page    (http://api.jquery.com/category/effects/)
    // The Ajax category   (http://api.jquery.com/category/ajax/)
    // Utilities           (http://api.jquery.com/category/utilities/)
    // The Data category   (http://api.jquery.com/category/data/)
    // Dimensions          (http://api.jquery.com/category/dimensions/)
    // The Offset category (http://api.jquery.com/category/offset/)
    // The Forms category  (http://api.jquery.com/category/forms/)
    // Internals           (http://api.jquery.com/category/internals/)
    // Deferred Object     (http://api.jquery.com/category/deferred-object/)



    // Traversing the DOM

    // .find()
    // .parent()
    // $('#banner').parent(); // body
    // $('.nested-list').closest('.top-list');
    // .parents('.class')
    // .siblings()
    // .next()
    // .prev()


    // Putting an .end() to DOM Traversal

    $('.top-list li').click(function() {
        $(this).find('.nested-list li').addClass('red').end().addClass('red');
    });


    // More Functions For Manipulating HTML
    // .text()
    // .html()
    // .append()
    // .prepend()
    // .before()
    // .after()
    // .replaceWith()
    // .remove()

    // .wrap()
    $('p').wrap('<div class="outer"><div class="inner"></div></div>');

    //.wrapInner();
    $('p').wrapInner('<div class="inner"></div>');

    // .unwrap()
    $('p').unwrap().unwrap();



    // Advanced Event Handling
    // Doesn`t work
    /* $('#banner a').click(function (e) {
        alert($(this).find('img').attr('src'));
        e.preventDefault();
    }); */


    // Deprecated
    /* $('#banner').delegate('a', 'click', function (e) {
            alert($(this).find('img').attr('src'));
            e.preventDefault();
    }) */

    // Recommended
    $('#banner').on('click', 'a', function (e) {
        alert($(this).attr('src'))
        e.preventDefault();
    });



    // Troubleshooting and Debugging

    // Syntax Errors
    // Runtime errors
    // Logic errors

    /* if(URL = 'http://google.com') {
            console.log(URL);
    } */

    /* for (var i=1; i>0; i++) {
        // this will run forever
    } */




    // Programming Tips to Reduce Errors

    // Build a script in small chunks
    // Test frequently



    // Debugging

    // console.log()
    // source debugger, step by step


}); // document ready end


