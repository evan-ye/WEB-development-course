/* 
 * Return the century of the year
 * param:
 * year - Number of year

 * return: The century or false if validation fail
 */

function getCentury(year) {
	if (year < 1 || year > new Date().getFullYear() || !Number.isInteger(year)) {
	  return false;
	}
	return Math.ceil(year / 100);
}

var year = 2017;
console.log(year, getCentury(year)); // 21

year = 'text';
console.log(year, getCentury(year)); // false

year = 2018;
console.log('2018:', getCentury(2018)); // false

year = 0;
console.log('0:', getCentury(0)); // false