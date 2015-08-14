# lang-comparisons
comparison of Node.JS, PHP, Ruby, Python and their frameworks for typical tasks


Test\Language                                                                   | Node.JS v0.12.7  | PHP 5.6.10      | Ruby 2.2.2   | Python 2.7.6  |  Python 3.3.4
------------------------------------------------------------------------------- | ---------------- | --------------- | ------------ | ------------  | --------------
PI                                                                              | **0,484s**       | 5,861266136s    | 5,502957224s | 18,61777062s  | 26,50143528s
[Mandelbrot](http://www.timestretch.com/article/mandelbrot_fractal_benchmark)   | **0,0428s**      | 0,694s          | 1,0857934s   | 1,324s        | 1,706s


Framework                           | Laravel 5.1.10(LTS)    | Yii2.0.7-dev            | Rails 4.2.0
----------------------------------- | ---------------------- | ----------------------- | -----------
Test1(PLD, TTFB, RC)                | 1.17s, 1.36s, 31.25MB  | 2.685s, 2.67s, 31.125MB | 519ms, 558ms, 150.7MB(*)

### Test1 - Page with 3000 models + pagination, table contains 10000 of records.
* PLD - time of loading page (debugger info)
* PLB - TTFB (browser info)
* RC - RAM consumption (debugger info)

(*) - WEBrick build-in server