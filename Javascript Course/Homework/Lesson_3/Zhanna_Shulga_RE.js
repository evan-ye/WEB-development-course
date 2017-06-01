function Re(code)
{ 
  if (code == '' || code == undefined) {
    return'Введите строку!';
  }

  var finalcode = '<ul>\n';
  var result = code.match(/([\w\d\s\-\,]+)(?=<\/h2>)/gim);

  if (result == null) {
    return'В строке нет тегов <h2>!';
  }

  for (var i = 0; i < result.length;i++)  {
     finalcode += '<li>' + result[i] + '</li>\n';
  }

  finalcode += '</ul>';
  return finalcode;
}
var code = prompt('Введите код:', '');
alert(Re(code));

