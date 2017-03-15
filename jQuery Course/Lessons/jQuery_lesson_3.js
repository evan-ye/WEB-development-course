$(document).ready(function() { // $(function() {

//Replacing and Removing Selections
//$('#banner').remove();
//$('#banner').replaceWith('<p>New content</p>')



// Setting and Reading Tag Attributes
// Classes
//$('#banner').addClass('red');
//$('.banner-text').removeClass('banner-text').addClass('red');
/*$('#banner').click(function() {
	$('#banner').toggleClass('red');
});*/



//Reading and Changing CSS Properties
//var width = $('.banner-slogan').css('width');
//$('.banner-slogan').css('width', 100);
//$('.banner-slogan').css('width', '100%');
//$('.banner-slogan').css('border', '5px solid blue');

// width = parseInt(width);
// $('.banner-slogan').css('width', width +100);
/*$('.banner-slogan').css({
	border: '5px solid blue',
	'font-size': 32
});*/



//Reading, Setting, and Removing HTML Attributes
// var imgSrc = $('img[alt="First image"]').attr('src');
// $('img[alt="First image"]').attr('src', 'assets/img1.jpg');
// $('img[alt="First image"]').removeAttr('alt');



// Acting on Each Element in a Selection
/*$('a').each(function(){
	console.log($(this).attr('href'));
	$(this).clone().appendTo('#banner');
});*/




// Events

// Mouse Events
/*$('#banner').click(function(){
   console.log('click');
   $(this).addClass('red');
});

/*$('#banner').dblclick(function(){
   console.log('dblclick');
   $(this).addClass('red');
});
*/

/*$('#banner').mousedown(function(){
   console.log('mousedown');
   $(this).addClass('red');
});*/

/*$('#banner').mouseup(function(){
   console.log('mouseup');
   $(this).addClass('red');
});*/

/*$('#banner').mouseover(function(){
   console.log('mouseover');
   $(this).addClass('red');
});*/

/*$('#banner').mouseout(function(){
   console.log('mouseout');
   $(this).removeClass('red');
});*/

/*$('#banner').mousemove(function(){
   console.log('mousemove');
});*/



// Form Events

/*$('#signup').submit(function(event){
	console.log('submit');
   event.preventDefault();
});

$('#signup').on('reset',function(event){
	console.log('reset');
   event.preventDefault();
});

$('#username, input[type=checkbox]').on('change', function(){
    console.log('changed');
});

$('#username, input[type=checkbox]').on('focus', function(){
    console.log('focus');
    $(this).val('');
});

$('#username, input[type=checkbox]').on('blur', function(){
    console.log('blur');
    $(this).val('error');
});


$('a').on('focus', function(){
    console.log('focus');
});*/




// Keyboard Events

/*$('input').on('keypress', function(){
	console.log('keypress');
})

$('input').on('keydown', function(){
	console.log('keydown');
})

$('input').on('keyup', function(){
	console.log('keyup');
})*/




// Using Events the jQuery Way

/*function startSlideShow() {

}*/
// $('#start').click(startSlideShow);
/*$('#start').click(function(){
});*/

// jQuery Events
/*$('#menu').hover(
	function(){}, // mouseover
	function(){} // mouseout
);*/

/*$('#menu').hover(
	startSlideShow, // mouseover
	endSlideShow // mouseout
);*/



// The Event Object

/*$('#banner').click(function(event) {
	console.log(event.pageX);
	console.log(event.pageY);
});*/


/*$('a').click(function(event) {
	event.preventDefault();
	console.log(event.target);
});*/


/*$('a').click(function(event) {
	console.log(event.target);
	return false;
});*/

// Removing Events
// $('a').unbind('click');



}); // document ready end


// Document/Window Events

/*$(window).on('load', function() {
      console.log('loaded');
});

$(window).on('resize', function() {
      console.log('resized');
});

$(window).on('scroll', function() {
      console.log('scrolled');
});

$(window).on('unload', function() {
      console.log('unloaded');
});
*/

