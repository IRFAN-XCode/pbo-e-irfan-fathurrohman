<?php

// Panggil file LuasLingkaran
require('./LuasLingkaran.php');

// panggil namespace LuasLingkaran
use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(16);
// $lingkaran->jari = 16;
$lingkaran->tampil('roda'); // panggil method

LuasLingkaran::testing();

?>