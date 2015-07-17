var num = 4.0;
var pi = 0;
var plus = true;
var startTime = Date.now();
var den = 1;
while (den < 100000000){
	if (plus){
		pi = pi + num/den;
    	plus = false;
	}    
  else{
	pi = pi - num/den;
    plus = true;
  }
  den = den + 2;
}

console.log("PI = " + pi +"\n");              // calculated value of pi
console.log("Math::PI = " + Math.PI + "\n");  // pi from the math class
var endTime = Date.now();
console.log((endTime - startTime) / 1000);