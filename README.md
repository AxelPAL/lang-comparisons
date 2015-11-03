# lang-comparisons
comparison of Node.JS, PHP, Ruby, Python and their frameworks for typical tasks


Test\Language                                                                   | Node.JS v0.12.7  | PHP 5.6.11      | Ruby 2.2.2   | Python 2.7.6  |  Python 3.4.0  |  PHP 7.0.0beta1
------------------------------------------------------------------------------- | ---------------- | --------------- | ------------ | ------------  | -------------- | ---------------
PI                                                                              | **0,484s**       | 5,761266136s    | 5,502957224s | 18,61777062s  | 26,50143528s   | 2,340999222s
[Mandelbrot](http://www.timestretch.com/article/mandelbrot_fractal_benchmark)   | **0,0428s**      | 0,694s          | 1,0857934s   | 1,324s        | 1,706s         | 0,52s
Exponential_function (native)                                                   | **0,0841s**      | 12,9031s        | 173,36194098s| 0,44745s      | 0,548002s      | 2,7739s
Exponential_function (lib)                                                      | **0,0072s**      | 10,964s         | -            | 315,2188s     | 412,07796s     | 10.969s


Framework                           | Laravel 5.1.10(LTS)    | Yii2.0.7-dev            | Rails 4.2.0
----------------------------------- | ---------------------- | ----------------------- | -----------
Test1(PLD, TTFB, RC)                | 1.17s, 1.36s, 31.25MB  | 2.685s, 2.67s, 31.125MB | 519ms, 558ms, 150.7MB(*)

### Test1 - Page with 3000 models + pagination, table contains 10000 of records.
* PLD - time of loading page (debugger info)
* PLB - TTFB (browser info)
* RC - RAM consumption (debugger info)

(*) - WEBrick build-in server