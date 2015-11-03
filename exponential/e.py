import math
import time
from decimal import *
import sys
sys.setrecursionlimit(10000)
startTime = time.time()
e = Decimal(2.0)
n = 1
limit = 10000
while n <= limit:
  fact = math.factorial(n+1)
  e += 1 / Decimal(fact)
  n += 1
print("Exponential_function (math_lib) = " + str(e))
endTime = time.time()
print(endTime - startTime)

def factorial(n):
  if n == 0:
    return 1
  else:
    return n * factorial(n-1)


startTime = time.time()
e = Decimal(2.0)
n = 1
limit = 1000
while n <= limit:
  fact = factorial(n+1)
  e += 1 / Decimal(fact)
  n += 1
print("Exponential_function (native) = " + str(e))
endTime = time.time()
print(endTime - startTime)