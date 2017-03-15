function getElementsList(code) {
  if (typeof(code) != 'string') {
    return 'It is not string';
  }
  var regExp = /(?!>)([\w\d\s\-]+)(?=<\/h2>)/igm,
      allElements = code.match(regExp),
      elementsList = '';
  if (allElements === null) {
    return 'Tag h2 not found';
  }
  for (var i = 0; i<allElements.length; i++) {
    elementsList += '<li>' + allElements[i] + '</li>\n';
  }
  return '<ul>\n' + elementsList + '</ul>';
}
