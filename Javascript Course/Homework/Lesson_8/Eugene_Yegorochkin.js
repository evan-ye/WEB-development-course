function getCountOfSameLetters(string1, string2) {
    var result = 0
    var str1 = string1.split('')
    var str2 = string2.split('')

    for (var i = 0; i < str1.length; i++) {
        for (var j = 0; j < str2.length; j++) {

            if (str1[i] === str2[j]) {
                str2.splice(str2.indexOf(str1[i]), 1)
                str1.splice(str1.indexOf(str1[i]), 1)
                result++
                i--
            }
        }
    }
    return result
}
getCountOfSameLetters("aabcc", "adcaa")
