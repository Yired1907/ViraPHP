<h3>PHP Filters Advanced</h3>
<?php
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo ("Variable value is not within the legal range");
} else {
    echo ("Variable value is within the legal range");
}

echo "<br>";
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo ("$ip is a valid IPv6 address");
} else {
    echo ("$ip is not a valid IPv6 address");
}

echo "<br>";
$url = "https://vira.vn";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo ("$url is a valid URL with a query string");
} else {
    echo ("$url is not a valid URL with a query string");
}

?>