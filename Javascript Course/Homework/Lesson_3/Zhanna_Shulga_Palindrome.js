function Palindrom(ar)
{
  
  if (/^\s+$/.test(ar) == true||ar == undefined) {
  	return'Введите строку!';
  } else if (ar===ar.split('').reverse().join('')) {
    return true;
  } else 
  	return false;
 }

ar = prompt('Введите строку:', '');
palindrom(ar);


