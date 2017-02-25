function GetCentury(year) 
{ 
return (year>=1 && year<=2017) ? ((year%100===0) ? year/100 : Math.ceil((year/100))) : "Год указан не правильно" 
}