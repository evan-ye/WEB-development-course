function happyTicket(num){
    var str = num.toString();
    var arrOne = str.split(''); 
    var arrTwo = str.split('').reverse();
    var one = []; 
    var two=[];
    for (var i=0; i<=(arrOne.length-1)/2; i++){ 
        one.push (parseInt(arrOne[i]));
        sumOne = one.reduce(function(a,b){return(a+b)});
    };
    for (var j=0; j<=(arrTwo.length-1)/2; j++){ 
        two.push (parseInt(arrTwo[j]));
        sumTwo = two.reduce(function(a,b){return(a+b)});
    };
    if (sumOne==sumTwo){
      return true;
    } else {
      return false;
    };
};
    happyTicket(12313);
   
