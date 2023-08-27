<?php


    function rp($amount)
    {
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }
    function rp_int($currency) {
        $currency = str_replace(',', '', $currency);
        return (int)str_replace('.', '', $currency);
    }