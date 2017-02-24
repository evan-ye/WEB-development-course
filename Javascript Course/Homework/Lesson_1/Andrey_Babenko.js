function getCentury(year) {
  if (+year >= 1 && +year <=2017) {
    return Math.ceil(year/100);
  } else {
    return "Год указан не правильно";
  }
}
// One line version
let getCenturyOneLine = (year) => +year >= 1  && +year <=2017 ? Math.ceil(year/100) : "Год указан не правильно";
