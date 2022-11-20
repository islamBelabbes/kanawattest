<?php 
require "vendor/autoload.php";


use Knawat\MP;

$mp = new MP(
    '44596440-65d2-11ed-9822-8f402054f501',
    '84d7b969-cf52-4810-b809-fa3f56ea536c'
);
    $sam = $mp->getProducts();
    $stdClass = json_decode(json_encode($sam));
    $array = json_decode(json_encode($sam), true);
   
    $prod = $array["products"];
print_r($prod);

    foreach ($prod as $products){
        ?>
         <hr class="rounded">
        <h1> sku(used-for-order-creating) : <?php echo $products["sku"]; ?> </h1>
        <h1> name : <?php echo $products["name"]["ar"]; ?> </h1>
        <img src="<?php echo $products["images"]["0"] ?>" alt="">
        <hr class="rounded">
        <?php
    }
?>


<style>
    img{
        width: 50px;
    }
    hr.rounded {
  border-top: 8px solid #bbb;
  border-radius: 5px;
}
</style>
