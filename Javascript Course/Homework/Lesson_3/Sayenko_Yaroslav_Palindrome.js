  function Palindrome(str) {
    if (str == null) {
 	return false;
    } else
    str = str.toString().toLowerCase();
        strReverse = str.split('').reverse().join(''); 
    if (strReverse == str) {
      return true;
    } else {
      return false;
    }
  }
console.log (Palindrome(12321));
console.log (Palindrome('abcded'));

