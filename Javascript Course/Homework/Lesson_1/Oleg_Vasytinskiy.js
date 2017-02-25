function CenturyCount() {
    var year = document.getElementById("year").value;
    if ((year < 1) || (year > 2017) || (isNaN(year) == true)) {
        alert("Ouu! You entered incorrect value!");
    } else {
        var centuryCount = year/100;
        var fraction = centuryCount % 1;
        if ( fraction > 0.1) {
            centuryCount + 1;
        }
        century = Math.ceil(centuryCount);
        alert("This year are placed in " + century + " century");
    }
}