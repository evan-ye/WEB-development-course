function checkPalindrome(str) {
    if (str == null) {
        return "You did not enter a value!"
    } else {
        return str == str.toString().split('').reverse().join('')
    }
}
checkPalindrome()
