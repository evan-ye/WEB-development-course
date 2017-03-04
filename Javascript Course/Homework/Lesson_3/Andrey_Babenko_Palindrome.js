function isPalindrome(string) {
  if (string == "" || string == undefined) {
    return "Data is not detected"
  }

  var backStr = string.toString().split("").reverse().join("");
  if (string.toString() == backStr) {
    return true;
  } else {
    return false;
  }
}
