# Initialize the health in harmony class
class HealthInHarmony
  
  #Define the constructor with two instance variables
  def initialize(name, date)
    @name = name
    @date = date
  end
  
  #Define an instance method
  def get_data
    puts "Name: #{@name} | Date: #{@date}"
  end
end

#Define a function
def harmony_data
  #Create an array of hash with data
  data = [
    { name: "John", date: "7/1/19" },
    { name: "Steve", date: "3/8/19" },
    { name: "Susan", date: "10/19/19" }
  ]
  #Iterate over the data array
  data.each do |el|
    #Instantiate a new instance of HealthInHarmony
    health = HealthInHarmony.new(el[:name], el[:date])
    #Call the get data method to print the data
    health.get_data
  end
end

#Call the harmony data function
harmony_data