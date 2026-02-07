<?php 

// $items = [
// 	0 => objectItem,
// 	…
// 	n => objectItem,
// ]


function filterItems($minPrice, $maxPrice, $items) {
    $result = [];
    
    foreach ($items as $item) {
        $price = $item->price ?? $item->prices[0]->price;
        
        if (isset($item->prices)) {
            $firstPrice = $item->prices[0]->price;
            $lastPrice = end($item->prices)->price;
            if ($firstPrice <= $minPrice || $lastPrice >= $maxPrice) continue;
        } else {
            if ($price <= $minPrice || $price >= $maxPrice) continue;
        }
        
        $result[$price][] = $item;
    }
    
    ksort($result);
    return $result;
}