function isPalindrome(string) {
  if (string === "" || string === undefined) {
    return "Data is not detected"
  }

  string = string.toString().toLowerCase();
  var backStr = string.split("").reverse().join("");

  if (string == backStr) {
    return true;
  } else {
    return false;
  }
}
