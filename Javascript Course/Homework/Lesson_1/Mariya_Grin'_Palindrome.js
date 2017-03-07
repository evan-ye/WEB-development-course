function Palindrome(str) {
	    if (str == null) {
	        alert("Введите число или слово");
	        return 'false';
	    } else {
	        str = str.toString().toLowerCase();
	        var strLen = str.length;
	        var strReverse = str.split('').reverse().join('');
	        if (strReverse == str) {
	            return 'true';
	        } else {
	            return 'false';
	        }
	    }
	};
Palindrome('abcba');
Palindrome('AbBa');
Palindrome(123321);	
Palindrome(12345);	
Palindrome();
