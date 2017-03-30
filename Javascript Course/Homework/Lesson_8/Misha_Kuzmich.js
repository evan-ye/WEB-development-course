function getNumOfSameChars(string1,string2){
	let result = 0;
	for (var i = 0; i < string1.length; i++) {
		var charIndex = string2.indexOf(string1[i]);
		if (charIndex > -1) {
			string1 = string1.replace(string1[i], "");
			string2 = string2.replace(string2[charIndex], "");
			result++;
			i--;
		}
	}
	return result;
}
var
string1 = "aabcc",
string2 = "adcaa";

getNumOfSameChars(string1,string2);