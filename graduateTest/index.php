<?php
//question1
echo "Question1". "<br>";

for($i=1; $i<=100; $i++){
  if ($i % 15 === 0){
    echo "FizzBuzz"."<br>";
  } else if ($i % 5 === 0){
    echo "buzz"."<br>";
  } else if ($i % 3 === 0){
    echo "Fizz"."<br>";
  } else {
    echo $i."<br>";
  }
}
echo "<hr>";

//question2
echo "Question2". "<br>";

for ($i = 1; $i <= 10000; $i++) {
  $point = 0;
  //素数は2つの約数をもつので$pointの値が2になれば素数と判断。割り切れた時に加算する制御構文。
  for ($j = 1; $j <= $i; $j++) {
    if ($i % $j == 0) {
      $point += 1;
    }
  }

  if ($point == 2) {
    echo $i . "<br>";
  }
}
echo "<hr>";

//question3
echo "Question3". "<br>";
echo "Question3". "<br>";

?>