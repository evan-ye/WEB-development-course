function getLongest(strings) {
    if (!Array.isArray(strings)) {
        return false;
    }
    var result = [], next = 0, pos = 0, longest = 0;
    while (pos < strings.length) {
        if (typeof strings[pos] === 'string' || strings[pos] instanceof String) {
            var len = strings[pos].length;
            if (len > longest) {
                next = 0;
                result[next] = strings[pos];
                longest = len;
                next++;
            } else if (len == longest) {
                result[next] = strings[pos];
                next++;
            }
            pos++;
        } else return false;
    }
    len = result.length;
    result.splice(next, len - next);
    return result;
}

var array = ["aa", "ad", "ba", "vcd", "aba"];
console.log(getLongest(array));

array = ["aa", "ad", 5, "vcd", "aba"];
console.log(getLongest(array));