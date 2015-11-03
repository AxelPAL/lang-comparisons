start_time = Time.now.getutc
e = 2.to_f
n=1
limit = 10000
while n <= limit do
  fact = (1..n+1).reduce(1, :*).to_f
  e += 1 / fact
  n += 1
end
puts "Exponential_function = #{e}"
end_time = Time.now.getutc - start_time
puts end_time