function longestWord(strings) {
   var longest = 0;
    var result = [];
    for (var i = 0; i < strings.length; i++) {
        if (longest < strings[i].length) {
            longest = strings[i].length;
            result.length = 0;
            result.push(strings[i]);
        }
        else if (strings[i].length == longest){
          result.push(strings[i]);
        }
    }
return result;
}
var strings = ["aba", "aa", "ad", "vcd", "aba"];
longestWord(strings);
