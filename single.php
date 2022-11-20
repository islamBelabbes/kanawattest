<?php 
require "vendor/autoload.php";
use Knawat\MP;
$mp = new MP(
    '44596440-65d2-11ed-9822-8f402054f501',
    '84d7b969-cf52-4810-b809-fa3f56ea536c'
);


$sku = "ZEN41035215744-1304";
$getp = $mp->getProductBySku($sku);
$stdClass = json_decode(json_encode($getp));
$array = json_decode(json_encode($getp), true);

print_r($array);