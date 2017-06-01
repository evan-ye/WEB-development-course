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
    
    var arr =  str.match(/<h2[^>]*>*(.*?)<\/h2>/gm);  
    var list = '<ul>';
	for(i = 0; i < arr.length; i++)
    {
		list += '<li>' + arr[i].replace('h2','') + '</li>';
	}
        list += '</ul>';
        //alert(list);
   document.getElementById("resRex").innerHTML = list;
  }

  function PolyGram(){
    var n = document.getElementById("side").value;
    if(n < 0|| n== NaN){
        alert("min square is 1")
    }else 
    if (n <= 0 || !n) {
        return 0
    } else {
        var square = n * n + (n - 1) * (n - 1);
       // alert(square);
      }
        document.getElementById("square").innerHTML = "Square = " + square;
  }