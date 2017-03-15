<script>
   function maxMultElement (arr) { 
    var mults = arr;
    for (var i=0; i<arr.length -1; i++) {
     arr[i] *=arr[i+1] ; // умножение  
 };
 return Math.max.apply(Math, mults);
};
maxMultElement ([2, 4, 6, 8, 10]);
</script>
