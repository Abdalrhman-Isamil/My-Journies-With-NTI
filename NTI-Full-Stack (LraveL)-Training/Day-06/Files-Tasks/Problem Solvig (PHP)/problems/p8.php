<?php
//? problem-08

function RouteRandomPass($n) {
    return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $n);
    //! str_shuffle() => ترتيب عشوائي string  بترتّب حروف الـ
    //! substr(string $string, int $start, int $length) => النص اللي هتقص منه $string الــ // => sub from which index => length your string u need
}

echo RouteRandomPass(5);
