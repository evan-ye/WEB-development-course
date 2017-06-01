function myfnc(s)
{
  
  var reg = /(.*)\(([^\)]*)\)(.*)/;
  while(reg.test(s))
  {
    var res =  s.match(reg);
    //if (res==undefined) break;
    
    //console.log(res[1],res[2],res[3])
    //console.log("....")
    s=res[1]+(res[2].split("").reverse().join(""))+res[3];
    //console.log (s);
    
  }
  return s;
}

console.log(myfnc("my(not(second))function"));
console.log("------------------------------------");
console.log(myfnc("a(bc)de"));
console.log("------------------------------------");
console.log(myfnc("a(bcdefghijkl(mno)p)q"));
console.log("------------------------------------");
console.log(myfnc("abc(cba)ab(bac)c"));
console.log("------------------------------------");

