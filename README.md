# lang-comparisons
comparison of Node.JS, PHP, Ruby, Python and their frameworks for typical tasks


Test\Language                                                                   | Node.JS 5.4.0    | PHP 7.0.2       | Ruby 2.3.0   | Python 2.7.6  |  Python 3.4.0  
------------------------------------------------------------------------------- | ---------------- | --------------- | ------------ | ------------  | -------------- 
PI                                                                              | **0,48s**        | 4.12s           | 5,52s        | 18,62         | 26,5s   
[Mandelbrot](http://www.timestretch.com/article/mandelbrot_fractal_benchmark)   | **0,04s**        | 0.52s           | 1,12s        | 1,33s         | 1,71s         
Exponential_function (native)                                                   | 0,68s            | 4.94s           | 175,8s       | **0,44s**     | 0,55s      
Exponential_function (lib)                                                      | **0,09s**        | 11.25s          | -            | 315,22s       | 412,08s     

### Test 1 - Page with 3000 models + pagination, table contains 10000 of records.

Framework             | Page load       | Memory consumption
--------------------- | --------------- | ------------------
Laravel 5.1.28(LTS)   | **0.26s**       | **19.32MB**
Yii2.0.7-dev          | 0.31s           | 21.23MB
Rails 4.2.0           | 0.56s           | 150.7MB(*)
SailsJS 0.11.4        | 0.27s           | 145MB

(*) - WEBrick build-in server