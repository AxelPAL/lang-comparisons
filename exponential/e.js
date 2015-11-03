var math = require('mathjs');

var e = 2;
var limit = 10000;
var startTime = Date.now();
for (var n = 1; n <= limit; n++){
	var fact = math.factorial(n + 1);
	e += 1 / fact;
}

console.log("Exponential_function (mathjs) = " + e +"\n");
var endTime = Date.now();
console.log((endTime - startTime) / 1000);

startTime = Date.now();
e = 2;
function factorial($number) {

	if ($number < 2) {
		return 1;
	} else {
		return ($number * factorial($number-1));
	}
}
for (n = 1; n <= limit; n++){
	fact = factorial(n + 1);
	e += 1 / fact;
}

console.log("Exponential_function (native) = " + e +"\n");
endTime = Date.now();
console.log((endTime - startTime) / 1000);