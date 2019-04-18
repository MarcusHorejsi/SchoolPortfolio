<?php
    $names = "Alex, Pahnia, Yumi, Spencer";
    echo $names."<br />";
    $names = str_replace("Alex","Kevin",$names);
    echo $names."<br />";

    $names = substr($names, 0, strpos($names,"Kevin"))."Alex, ".substr($names, strpos($names, "Kevin"));
    echo $names."<br />";
?>