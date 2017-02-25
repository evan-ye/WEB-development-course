function showСentury(year) {
    var age
    if (year < 1 || year > 2017) {
        age = "Год указан не правильно"
    } else {
        age = Math.ceil(year / 100)
    }
    return age
}
showСentury(2017)
