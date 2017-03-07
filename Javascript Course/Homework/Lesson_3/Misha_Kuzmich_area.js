function getArea(n){
	n -= 1;
	Sn = 1 + ((2 + (n-1))*n/2 )*4
	return Sn;
}
alert(getArea(5))