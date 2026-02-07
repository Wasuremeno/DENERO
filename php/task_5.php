<?php

global $items;
var_export(test($items));
// function test($items) {
// 	$sites = [];
// 	$result = [];
// 	foreach($items as $item) {
// 		preg_match('/(site1\.ru)/', $item->site, $matches);
// 		if ($matches) {
// 			$sites[count($sites)] = 'site1.ru';
// 		} else {
// 			$sites[count($sites)] = 'site2.ru';
// 		}
// 		if($result < count($sites)) {
// 			$result[count($result)] = count($sites);
// 		}
// 	}
// 	testTwo($result);
// 	return $sites;
// }
// function testTwo($arr) {
// 	$newArr = [];
// 	foreach($arr as $itemRes) {
// 		if($itemRes > 0) $newArr = $itemRes;
// 	}
// }





function test($items) {
    $sites = [];
    foreach($items as $item) {
        $sites[] = strpos($item->site, 'site1.ru') !== false ? 'site1.ru' : 'site2.ru'; 
    }
    return $sites;
}