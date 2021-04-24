<?php
$path = '/Model/Item.php';
require_once __DIR__."/../config.php";
require_once SITE_ROOT."$path";

$itemPieChart = new Item();
$itemOutSt = count($itemPieChart->getItemOutOfStockPiechart(0));
$itemLowSt = count($itemPieChart->getItemLowStockPiechart(1));
$itemHalfSt = count($itemPieChart->getItemHalfStockPiechart(2));
$itemFullSt = count($itemPieChart->getItemFullStockPiechart(3));
$itemChart = array('red'=>$itemOutSt, 'orange'=>$itemLowSt, 'yellow'=>$itemHalfSt, 'green'=>$itemFullSt);
$jsonArray = json_encode($itemChart);
echo $jsonArray;