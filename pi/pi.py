import math
import time
num = 4.0
pi = 0
plus = True
startTime = time.time()
den = 1
while den < 100000000:
  if plus:
    pi = pi + num/den
    plus = False
  else:
    pi = pi - num/den
    plus = True  
  den = den + 2


print("PI = " + str(pi))              # calculated value of pi
print("Math::PI = " + str(math.pi))  # pi from the math class
endTime = time.time()
print(endTime - startTime)