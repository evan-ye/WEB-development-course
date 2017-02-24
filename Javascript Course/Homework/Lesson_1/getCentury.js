function getCentury(year) {
	return (year < 1 || year > 2017) ? 'Год указан не верно' : (Math.ceil(year / 100)) + ' век';
}