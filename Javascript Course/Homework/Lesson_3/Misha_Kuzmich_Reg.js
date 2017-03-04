function getH2Content(html) {
	var reg = /<[hH]2>[a-zA-Z ]*<\/[hH]2>/gm;
	var arr = html.match(reg);
	var line = '<ul>';
	for(i = 0; i < arr.length; i++){
		line += '<li>' + arr[i] + '</li>';
	}
	line += '</ul>';
	return line;
}
document.body.innerHTML = getH2Content('Name : <h2>John</h2> Second-name : <h2>Doe</h2>Specialisation: <h2> Developer </h2>')