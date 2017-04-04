function getMutualCharsAmount(string1, string2) {
  var regExp = /^[a-z]+$/;
  if (!regExp.test(string1) || !regExp.test(string2)) {
    return 'Input error';
  }
  var mutualCharsAmount = 0;
  for (var i=0; i<string1.length; i++) {
    if (string2.indexOf(string1[i]) > -1) {
      mutualCharsAmount++;
      string2 = string2.replace(string2[string2.indexOf(string1[i])], "");
      string1 = string1.replace(string1[i], "");
      i--;
    }
  }
  return mutualCharsAmount;
}
