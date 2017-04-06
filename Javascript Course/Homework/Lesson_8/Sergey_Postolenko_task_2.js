function luckyticket(str)
{
  console.log(str);
  if(/[^0-9]/.test(str)) return false;
  if(str.length==1) return false;
  var notlucky=0;
  for(i=0;i<(str.length/2); i++)
  {
    notlucky = notlucky + (str[i]-str[str.length-i-1]);
  }
  
  if (str.length%2 ==1) 
  {
    notlucky = Number(notlucky) + Number(str[Math.floor(str.length/2)]);
  }
  if(notlucky) return false;
  else return true;
}


  console.log(luckyticket("1230"));console.log("_________");
  console.log(luckyticket("1240"));console.log("_________");
  console.log(luckyticket("4230"));console.log("_________");
  console.log(luckyticket("123"));console.log("_________");
  console.log(luckyticket("0"));console.log("_________");
  console.log(luckyticket(55));console.log("_________");
  console.log(luckyticket(55));console.log("_________");
  console.log(luckyticket("aa"));console.log("_________");
  
