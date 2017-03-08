// Палиндром

function checkPalindrom(input){

	if(typeof( input ) != 'string' && typeof( input ) != 'number') return false;

	inputString = input.toString();

	if(inputString.length % 2 != 0) return false;

	inputChunks = inputString.match( new RegExp('.{1,' + inputString.length/2 + '}', 'g') );

	if( inputChunks[0] != inputChunks[1].split('').reverse('').join('') ){

		return false;
	}

	return true;

}

checkPalindrom(154451);
checkPalindrom('15455442');
checkPalindrom(24565);
checkPalindrom(0);




// RegExp

function makeListFromHeaders(content){

  var headerText = '',
  		output     = document.createElement("ul");

	content.replace(/<h2.+>(.+)<\/h2>/g,function(str,p){

		headerText += '<li>' + p.replace(/<.+>/,'') + '</li>';

	})

	output.innerHTML = headerText;

	return output;

}

makeListFromHeaders($('html').html());



// 