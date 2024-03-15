<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeNumberController extends Controller
{
    public function isPrime($number)
    {
        if ($number <= 1) return "não é primo";
        if ($number == 2) return "é primo";
        if ($number % 2 == 0) return "não é primo";
        for ($i = 3; $i <= sqrt($number); $i += 2) {
            if ($number % $i == 0) return "não é primo";
        }
        return "é primo";
    }
}
