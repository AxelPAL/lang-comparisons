package main

import "fmt" 
import "time"
import "math"

func main() {
  num := 4.0;
  pi := 0.0;
  plus := true;
  startTime := time.Now().UnixNano();
  den := 1.0;
  for den < 100000000 {
    if plus {
      pi = pi + num/den;
      plus = false;
    } else {
      pi = pi - num/den;
      plus = true;
    }
    den = den + 2;
  }
  fmt.Printf("PI = ");
  fmt.Printf("%v\n", pi) 
  fmt.Printf("Math::PI = ");
  fmt.Printf("%v\n", math.Pi);
  endTime := time.Now().UnixNano();
  fmt.Printf("%v\n", float64(endTime - startTime) / 1000000000);
}
