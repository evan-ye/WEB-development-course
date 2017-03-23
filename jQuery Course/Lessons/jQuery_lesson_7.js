$(document).ready(function () {

    // AJAX = Asynchronous JavaScript and XML

    // Talking to the Web Server

    // 1. Create an instance of the XMLHttpRequest object
    // var newXHR = new XMLHttpRequest();

    // 2. Use the XHR’s open()
    // GET or POST
    // newXHR.open('GET', 'shop.php?productID=34');

    // 3. Set the callback function

    // 4. Send the request.
    // newXHR.send(null); //GET
    // newXHR.send(productID=34); //POST

    // 5. Receive the response
    // status of the request
        // 404 - Not found
        // 200 - OK
        // 500 - Internal Server Error
        // 403 - Access Forbidden
        // Other codes documentation http://www.restapitutorial.com/httpstatuscodes.html
    // text response
    // XHR object’s responseXML property


    // Ajax the jQuery Way

    // load()

    // $('#banner').load('jQuery_lesson_5.html');
    // $('#banner').load('jQuery_lesson_5.html #signup');




    // The get() and post() Functions

    // $.get(url, data, callback);
    // $.post(url, data, callback);



    // Formatting Data to Send to the Server

    // Query string

    // http://example.com/products.php?prodID=18&sessID=1234

    /* $.get('products.php', 'prodID=18&sessID=1234', function () {

       });

       $.post('products.php', 'prodID=18&sessID=1234', function () {

       }); */



    // URI Encoding

    // $.get('products.php', 'favFood=Mac & Cheese'); //incorrect
    // ' ' = '%20'
    // '&' = '%26'
    // '=' '%3D'
    // $.get('products.php', 'favFood=Mac%20%26%20Cheese');

    // encodeURIComponent()
    // var queryString = 'favFood=' + encodeURIComponent('Mac & Cheese');
    // $.get('products.php', queryString);

    /*  $('#signup').submit(function(event){
            event.preventDefault();
            var username = $('#username').val();
            var planet = $('#planet').val();
            $.post('assets/process.php', 'username=' + username + '&planet=' + planet, function(){
                alert('response has been received');
            })
    });*/



    // Object literal

    /* {
         name1: 'value1',
         name2: 'value2'
        } */
    // $.post('rankMovie.php', { rating: 5 });

    /* var data = { rating: 5 };
    $.post('rankMovie.php', data); */


    /*  $('#signup').submit(function(event){
            event.preventDefault();
            var username = $('#username').val();
            var planet = $('#planet').val();
            var data = {
                username: username,
                planet: planet
            };
            $.post('assets/process.php', data, function(){
                alert('response has been received');
            })
    }); */




    // jQuery’s serialize() function

    /* $('#signup').submit(function(event){
        event.preventDefault();
        var data = $(this).serialize();
        console.log(data);
        $.post('assets/process.php', data, function(){
            alert('response has been received');
        })
    }); */



    // Processing Data from the Server

    /*  $('#signup').submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            console.log(data);
            $.post('assets/process.php', data, function(serverData, status){
                console.log('serverData: ' + serverData);
                console.log('serverData: ', serverData);
                console.log('status: ', status);
        })
    }); */

    /* $('#signup').submit(function(event){
            event.preventDefault();
            var data = $(this).serialize();
            console.log(data);
            $.post('assets/process.php', data, processResponse)
    });

    function processResponse(serverData, status, jqXHR) {
        console.log('serverData: ' + jqXHR);
        console.log('serverData: ', jqXHR);
        console.log('status: ', status);

        var newHTML;
        newHTML = '<h2>Your vote is counted</h2>';
        newHTML += '<p>The average rating for this movie is ';
        newHTML += serverData + '.</p>';
        $('#banner').html(newHTML);
    } */




    // Handling Errors

    /*   $.get('scriptt.php', 'text=text', processResponse).fail(errorResponse);

    function processResponse(data) {
        var newHTML;
        newHTML = '<h2>Your vote is counted</h2>';
        newHTML += '<p>The average rating for this movie is ';
        newHTML += data + '.</p>';
        $('#banner').html(newHTML);
    }
    function errorResponse() {
        var errorMsg = "Your vote could not be processed right now.";
        errorMsg += "Please try again later.";
        $('#banner').html(errorMsg);
    } */


    // Deprecated $.get('rate.php', querystring, processResponse).error(errorResponse);




    // Receiving XML from the Server

    /*  $.get('assets/process.php','id=234',processXML);
        function processXML(data) {
            console.log('serverData: ', data);
            var messageContent = $(data).find('content').text();
            console.log('messageContent: ', messageContent);
        } */




    // JSON = JavaScript Object Notation
    /* {
            firstName: 'Frank',
            lastName: 'Smith',
            phone: '503-555-1212'
       } */


    /* $.getJSON('assets/process.php', 'id=234', callback);

    function callback(data) {
        console.log('serverData: ', data);
        console.log('a: ', data.a);
    } */

    /* $.post('assets/process.php', 'id=234', function(data, textStatus) {
            //data contains the JSON object
            //textStatus contains the status: success, error, etc
            console.log('serverData: ', data);
            console.log('a: ', data.a);
    }, "json");

    $.get('assets/process.php', 'id=234', function(data, textStatus) {
            //data contains the JSON object
            //textStatus contains the status: success, error, etc
            console.log('serverData: ', data);
            console.log('a: ', data.a);
    }, "json");
    */



    // Accessing JSON Data

    /* var bday = {
            person: 'Raoul',
            date: '10/27/1980'
        };
        bday.person // 'Raoul'
    */



    // Complex JSON Objects

    /* {
            contact1: {
                firstName: 'Frank',
                    lastName: 'Smith',
                    phone: '503-555-1212'
            },
            contact2: {
                firstName: 'Peggy',
                    lastName: 'Jones',
                    phone: '415-555-5235'
            }
        }
         data.contact1.firstName
     */



    //$.ajax()

    /* $.ajax({
        dataType: "json",
        url: url,
        data: data,
        success: success,
        method: method // (default: 'GET')
    }); */


    // Going Further with jQuery and Ajax

    // http://jquery.malsup.com/form/
    // http://jqueryui.com/demos/auto-complete/
    // www.uploadify.com/


}); // document ready end


