function isSequence(ar){ 
if (ar === undefined || ar.length == 0) {
  return 'Введите массив.';
}  
var i = 0; 
while (i < ar.length - 1) { 
  if (!i) {
    if (ar[0] >= ar[1]) { 
    ar.splice(0, 1); 
    break; 
    } 
  } else if (ar[i] >= ar[i + 1] && ar[i] >= ar[i + 2]) { 
    ar.splice(i, 1); 
    break; 
  } 
    else if (ar[i] > ar[i+1]) {
    ar.splice(i + 1, 1); 
    break; 
  }
  i++;
} 
for (i = 0; i < ar.length-1; i++){ 
  if (ar[i] >= ar[i+1]) {
    return false;
  } 
} 
return true; 
} 
var ar = [ 1, 2, 10, 5, 6] ;
isSequence(ar);
