function Poli(){
  var str = document.getElementById("inp").value;
    var strRev = str.split("").reverse().join("")
      if(str == "")
      {
        document.getElementById("res").innerHTML = "OOps where is your string?";
      }
      else if(str == strRev)
        {
          document.getElementById("res").innerHTML = false + " it's not a polindrom";
        }
        else
        {
            document.getElementById("res").innerHTML = true + " is a παλινδρομέω";
        
        }
  }

  //REgExp
  function Rex(){
  var str = document.getElementById("rex").value;
     var result = str.match(/<h2[^>]*>(.*?)<\/h2>/gm);
        document.getElementById("res").innerHTML = result[0];
  }

  function PolyGram(){
    var n = document.getElementById("side").value;
    var square = 0;
    function factorial(n) {
            return (n != 1) ? n * factorial(n - 1) : 1;
            }
    if(n == 1){
        square = 1;
        
    } else if( n <= 3){
      square = factorial(n) * 2 + 1;   
      }else{
      square =  factorial(n);
}
        document.getElementById("square").innerHTML = "Square = " + square;
  }