function palindrome(str)
{
  if(str=== "")
    return "DON'T GIVE AN EMPTY STRING!"
  str+="";
  for(i=0;i<(str.length/2);i++)
    if(str[i]!=str[str.length-i-1])
      return false;
  return true;
}

console.log(palindrome("anna"));
console.log(palindrome("ana"));
console.log(palindrome("aa"));
console.log(palindrome("a"));
console.log(palindrome("AAAAAAA!!!"));
console.log(palindrome("Bob"));

console.log(palindrome(55));
console.log(palindrome(13));

console.log(palindrome(""));