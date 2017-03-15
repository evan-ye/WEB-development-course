function getH2List (str) {
	var re = /(<h2 [\w="-]+>)[\s\w<=#\.'"-\/>]+(<\/h2>)/igm;
	var arrH2 = str.match(re);
	return arrH2.join(',\n');
}