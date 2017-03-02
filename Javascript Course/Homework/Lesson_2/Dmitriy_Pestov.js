var array = [30, 6, -2, -50, 7, 3,-100, 100];
document.getElementById("demo").innerHTML = array;    

function myFunction() {
    array.sort(function(a, b){return b - a});
    var len = array.length;
    maxPlusCom = array[0]*array[1];
    maxNegCom = array[(len-2)]*array[len-1];
    
     var required = 0;
     if(maxPlusCom >maxNegCom )
     {
     	required = maxPlusCom;
     }else
     {
       required = maxNegCom;
     }
    
    document.getElementById("demo").innerHTML = "Max is "+ required;
}