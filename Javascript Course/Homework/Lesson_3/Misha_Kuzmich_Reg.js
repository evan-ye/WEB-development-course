function h2contentToList(text){
	if(!text){
		return 'No text recived.'
	}
	reg = />([\w\d\s\-]+)(<\/h2>)/igm;
	arr = htmlContent.match(reg);

	list = '<ul>';
	arr.forEach(function(item) {
		list += item.replace('>', '<li>').replace('</h2>', '</li>');
	}); 
	list += '</ul>';

	return list;
}
h2contentToList(htmlContent);