function CenturyShower(){
     var year = document.getElementById("year").value;
     if(year< 1 || year > 2017 || isNaN(year)== true){
         alert("oops wrong year =) Tips: year need be from 1 to 2017");
           document.getElementById("year").value = "";
     } else {
              centuryPart = year / 100;
              var dec = centuryPart % 1;
             if( dec > 0.1){
                centuryPart + 1;
             }
         century = Math.ceil(centuryPart);
         document.getElementById("century").innerHTML = ("century is " + century);
     }
}
