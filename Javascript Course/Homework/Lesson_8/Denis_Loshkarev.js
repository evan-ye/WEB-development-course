function getOverallChars(str1, str2) {
    var re = /[^a-z]/;
    if (str1.match(re) || str2.match(re)) {
        return false;
    }
    var chars = [];
    var overall = 0;
    for (var pos1 = 0; pos1 < str1.length; pos1++) {
        for (var pos2 = 0; pos2 < str2.length; pos2++) {
            if (chars.indexOf(pos2) >= 0) continue;
            if (str1[pos1] == str2[pos2]) {
                chars.push(pos2);
                overall++;
                break;
            }
        }
    }
    return overall;
}

var string1 = "aabcc", string2 = "adcaa";
console.log(string1, string2, getOverallChars(string1, string2));

string1 = "aabcc"; string2 = "adcaaZ";
console.log(string1, string2, getOverallChars(string1, string2));

string1 = "a5abcc"; string2 = "adcaaZ";
console.log(string1, string2, getOverallChars(string1, string2));

string1 = "aDabcc"; string2 = "adcaaZ";
console.log(string1, string2, getOverallChars(string1, string2));

string1 = "asss"; string2 = "aaaa";
console.log(string1, string2, getOverallChars(string1, string2));
