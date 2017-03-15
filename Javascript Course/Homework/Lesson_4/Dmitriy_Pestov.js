function compareNummers(a, b) {
    return a - b;
}
let array = [6, 2, 3, 8];
array.sort(compareNummers);
let lenght = array.length;
let diff = array[lenght - 1] - array[0];
let answer = (diff + 1) - lenght;

console.log(answer + " element(s) is missing " + "in array: "+ array);
