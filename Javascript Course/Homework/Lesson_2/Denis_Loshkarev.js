function isPalindrome(str) {
    str = str + "";
    var len = str.length;
    for (var i = 0; i < len / 2; i++) {
        if (str[i] != str[len-i-1]) return false;
    }
    return true;
}

function area(n) {
    if (!Number.isInteger(n) || n < 1) return false;
    return Math.pow(n, 2) + Math.pow((n-1), 2);
}