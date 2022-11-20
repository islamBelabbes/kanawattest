<?php 
require "vendor/autoload.php";
use Knawat\MP;
$mp = new MP(
    '44596440-65d2-11ed-9822-8f402054f501',
    '84d7b969-cf52-4810-b809-fa3f56ea536c'
);


$order_data= [
"items"=>[
[
"sku"=> "ZEN41035215744-1304-46",
"quantity"=> "1",
],
],
"shipping" =>[
    "first_name"=> "John",
    "last_name"=> "Doe",
    "address_1"=> "John Doe 123",
    "address_2"=> "Main St",
    "city"=> "The City",
    "state"=> "Any town",
    "postcode"=> "ST3 7HS",
    "country"=> "US",
    "email"=> "email@example.com",
    "phone"=> "+19098648831"
],
];





$aa = $mp->createOrder($order_data);
print_r($aa);