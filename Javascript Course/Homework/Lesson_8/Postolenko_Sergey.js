function func(str1,str2)
{
  if(/[^a-z]/.test(str1) && /[^a-z]/.test(str2)) return "Invalid strings"
  if(/[^a-z]/.test(str1)) return "Invalid string 1"
  if(/[^a-z]/.test(str2)) return "Invalid string 2"
  var arr1 = str1.split("");
  var arr2 = str2.split("");
  var n=0;
  for(i=0;i<arr1.length;i++)
  {
    for(j=0;j<arr2.length;j++)
    {
      if(arr2[j]===arr1[i])
      {
        arr2.splice(j,1);n++
      }
    }
  }
  return n;
}


var s1="hatedothiscodethirdtimehowcouldithappen";
var s2="hellotest";
var s3="BIGLETERS";
var s4=666;
var s5=13;

console.log(func(s1,s2));
console.log(func(s1,s3));
console.log(func(s3,s2));
console.log(func(s4,s5));