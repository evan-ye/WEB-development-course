function getCentury(year) {
	if(year >= 1 && year <= 2017){
		century = Math.ceil(year/100)
		alert(year + " год это " + century + " век")
	}
	else{
		alert('Год указан не правильно')
	}
}

getCentury(1824)