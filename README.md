# lang-comparisons
comparison of Node.JS, PHP, Ruby, Python and their frameworks for typical tasks


Test\Language | Node.JS v0.12.7  | PHP 5.6.10      | Ruby 2.2.2  | Python 2.7.6  |  Python 3.3.4
------------- | ---------------- | --------------- | ----------- | ------------  | --------------
PI(seconds)   | **0,484**        | 5,861266136     | 5,502957224 | 18,61777062   | 26,50143528


Framework                           | Laravel 5.1.10(LTS)    | Yii2.0.7-dev          | Rails
----------------------------------- | ---------------------- | --------------------- | -----------
Test1(PLD, TTFB, RC)                | 348.66ms, 398ms, 13MB  | 529ms, 526ms, 9,373MB |

### Test1 - Page with 500 models + pagination
* PLD - time of loading page (debugger info)
* PLB - TTFB (browser info)
* RC - RAM consumption (debugger info)
