# lang-comparisons
comparison of Node.JS, PHP, Ruby, Python and their frameworks for typical tasks


Test\Language                                                                   | Node.JS 5.4.0    | PHP 7.0.2       | Ruby 2.2.2   | Python 2.7.6  |  Python 3.4.0  
------------------------------------------------------------------------------- | ---------------- | --------------- | ------------ | ------------  | -------------- 
PI                                                                              | **0,48s**        | 4.12s           | 5,52s        | 18,62         | 26,5s   
[Mandelbrot](http://www.timestretch.com/article/mandelbrot_fractal_benchmark)   | **0,04s**        | 0.52s           | 1,12s        | 1,33s         | 1,71s         
Exponential_function (native)                                                   | **0,68s**        | 4.94s           | 175,8s       | 0,44s         | 0,55s      
Exponential_function (lib)                                                      | **0,09s**        | 11.25s          | -            | 315,22s       | 412,08s     

### Test 1 - Page with 3000 models + pagination, table contains 10000 of records.

Framework             |  PLD    | PLB   | RC
--------------------- | ------- | ----- | -----------
Laravel 5.1.10(LTS)   |   1.17s | 1.36s | 31.25MB
Yii2.0.7-dev          |   2.68s | 2.67s | 31.125MB
Rails 4.2.0           |   0.52s | 0.56s | 150.7MB(*)

* PLD - time of loading page (debugger info)
* PLB - TTFB (browser info)
* RC - RAM consumption (debugger info)

(*) - WEBrick build-in server