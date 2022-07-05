<?php 

/*
README: This should run in Codepad without issue now.

Write a function that accepts a List of positive integers as an input parameter. 

For each integer, determine if the integer is even, odd, and or a prime number. 

The function should return a data structure containing a list of the even numbers, a list of odd number, and a list of prime numbers. A number can be both odd and prime, or even and prime, and should be in both lists when that is the case. Withing each list, numbers should be unique.

A prime number is any number that is only divisible by itself and 1.

Test input: 2, 281, 311, 987, 487, 871, 221, 565, 159, 82, 913, 531, 695, 506, 506, 346, 75, 836, 947, 400, 862, 3, 607, 607, 674, 265, 16, 35, 2147483646, 2147483647

*/


  $input = [2, 281, 311, 987, 487, 871, 221, 565, 159, 82, 913, 531, 695, 506, 506, 346, 75, 836, 947, 400, 862, 3, 607, 607, 674, 265, 16, 35, 2147483646, 2147483647];

  $numbers = [];
  $numbers["odds"] = [];
  $numbers["even"] = []; 
  $numbers["prime"] = []; 
  
  function process($input, $numbers){
    foreach($input as $i){
        $check = primeCheck($i);
        //echo "check i: $i\n";

        if($check == 1){
          //echo "prime $i\n";
          $numbers["prime"][$i] = $i;
          $numbers["odds"][$i] = $i;
        }
        else{
          //echo "not prime $i\n";
          $numbers["even"][$i] = $i;
        }
    }
    return $numbers;
  }
  

  function primeCheck($num){
    //echo "Check prime: " . $num . "\n";
    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
          //echo "not $num\n";
          return 0;
        }
        //echo "prime $num\n";
        return 1;
    }
  }

  $big_list = process($input, $numbers);
  var_dump($big_list);
