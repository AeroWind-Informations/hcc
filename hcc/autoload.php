<?php

$hcc = new stdClass();
$rootPath = $_SERVER["DOCUMENT_ROOT"];
$HccPath = $rootPath . "/hcc/";
$includePaths = array(
    "Apps" => "apps",
    "Core" => "core",
    "Plugins" => "plugins",
    "Market" => "market"
);

foreach ($includePaths as $name => $path) {
    $initPath = $HccPath . "/engine/" . $path . "/init.php";
    (@include_once $initPath) or die("Fatal error: load [" . $name . "] - path (" . $path . ")");
    /* I dont know how to call this use */
    $ss = "Hcc\\Engine\\".$name . "\\" . $name;
    $test = new $ss;
    $hcc->$name = $test;
}
?>