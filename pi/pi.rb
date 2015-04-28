num = 4.0
pi = 0
plus = true
startTime = Time.now.getutc
den = 1
while den < 100000000
  if plus
    pi = pi + num/den
    plus = false
  else
    pi = pi - num/den
    plus = true
  end
  den = den + 2
end

puts "PI = #{pi}"              # calculated value of pi
puts "Math::PI = #{Math::PI}"  # pi from the math class
endTime = Time.now.getutc
puts endTime - startTime