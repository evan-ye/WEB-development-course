function mul(arr) {
	max = arr[0]*arr[1];
	for (i = 0; i < arr.length; i++){
		mul = arr[i] * arr[i+1]
		if (mul > max){
			max = mul
		}
	}
	return max;
}
array = [9,9,0,1,2,3,4,5];
res = mul(array);
console.log(res);