function getFrame($array) {
    $result = [];

    foreach($array as $value) {
        array_push($result, "*".$value.
            "*");
    }
    array_unshift($result, (""));
    array_push($result, (""));

    while ($i < strlen($result[1])) {
        $result[0].= "*";
        $result[count($result) - 1].= "*";
        $i++;
    }
    return $result;
}
print_r(getFrame(["abc", "ded"]));
