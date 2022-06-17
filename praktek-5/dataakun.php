<?php
require_once "akunbank.php";
$nanas = $_POST['nanas'];
$noreknas = $_POST['noreknas'];
$salnas = $_POST['salnas'];

// $nb1 = new akunbank(119877,1900000,"doni");
$nb1 = new akunbank("c001", 6000000, "ahmad");
$nb2 = new akunbank("c002", 5350000, "budi");
$nb3 = new akunbank("c003", 2500000, "kurniawan");
$nb4 = new akunbank($noreknas,$salnas,$nanas);
$nb1->transfer($nb2, 500000);
$nasabah = [$nb1, $nb2, $nb3, $nb4];
