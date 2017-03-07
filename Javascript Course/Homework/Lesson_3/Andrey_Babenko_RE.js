function getElementsList(code) {
  var regExp = /(?!>)([^><]*)(?=<\/h2>)/igm,
      allElements = regExp.exec(code),
      elementsList = '';
  
  for (var i = 0; i<allElements.length; i++) {
    elementsList += '<li>' + allElements[i] + '</li>\n';
  }
  
  return '<ul>\n' + elementsList + '</ul>';
}
