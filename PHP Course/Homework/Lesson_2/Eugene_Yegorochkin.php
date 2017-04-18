function getReverseString($string) {

    while (strlen(stristr($string, "("))) {
        if (strrpos($string, "(") < strpos($string, ")")) {
            $start = strrpos($string, "(");
            $end = stripos($string, ")");
        } else {
            $start = strpos($string, "(");
            $end = strpos($string, ")");
        }
        $len = strlen($string) - 1;
        $substring = substr($string, $start, -($len - $end));
        $clearSubstring = substr($substring, 1, strlen($substring) - 2);
        $string = str_replace($substring, strrev($clearSubstring), $string);
    }
    print_r($string);
}
getReverseString("a(bcdefghijkl(mno)p)q");
