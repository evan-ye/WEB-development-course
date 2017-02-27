function whatcentury(year){
 var mdate = new Date();
 var syear = year.toString();
 syear = '0'+'0'+'0'+syear;
 if(year<1 && year>mdate.getFullYear()) return 'Год указан неправильно!';
 else 
  if(syear.substr(syear.length-2,2)>0) return parseInt(syear.substr(syear.length-4,2))+1;
 else return parseInt(syear.substr(syear.length-4,2));
}

var test=whatcentury(-1);
alert(test);
