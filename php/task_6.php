<?php 

// global $item;
// getMinPrice();
// function getMinPrice($item) {
// 	return formatprice(
// 		usort($item->prices, function($a, $b) {
// 			return $a->price - $b->price
// 		})[0]->price
// 	)
// }
// function formatPrice($price) {
// 	return preg_replace('/\B(?=(\d{3})+(?!\d))/', ',',$price)
// }



function getMinPrice($item) {
    usort($item->prices, fn($a, $b) => $a->price <=> $b->price);
    return formatPrice($item->prices[0]->price);
}

function formatPrice($price) {
    return number_format($price, 0, '.', ',');
}