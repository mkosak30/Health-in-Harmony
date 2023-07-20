--Health in Harmony

--Global Variables
local current_weight = 0
local current_height = 0
local body_mass_index = 0

-- Function to get user's current weight
function getUserWeight()
    current_weight = io.read("*n")
    if(current_weight ~= nil) then
        return current_weight
    else
        print("Please enter a valid number.")
        return 0
    end
end

-- Function to get user's current height
function getUserHeight()
    current_height = io.read("*n")
    if(current_height ~= nil) then
        return current_height
    else
        print("Please enter a valid number.")
        return 0
    end
end

-- Function to calculate BMI 
function calculateBMI(weight, height)
    body_mass_index = (weight / (height^2)) * 703
    if(body_mass_index ~= nil) then
        return body_mass_index
    else
        print("Error calculating BMI.")
        return 0
    end
end

-- Function to check BMI and suggest wellness plan
function bmiCheck(bmi)
    if(bmi < 18.5) then
        print("Your BMI is " .. bmi .. ". You are considered underweight. Talk to your doctor about nutrition and exercise options.")
    elseif(bmi >= 18.5 and bmi <= 24.9) then
        print("Your BMI is " .. bmi .. ". You are considered to have a healthy weight. Keep at it!")
    elseif(bmi >= 25 and bmi <= 29.9) then
        print("Your BMI is " .. bmi .. ". You are considered overweight. Talk to your doctor about nutrition and exercise options.")
    else
        print("Your BMI is " .. bmi .. ". You are considered obese. Talk to your doctor about nutrition and exercise options.")
    end
end

-- Start program
print("Welcome to Health in Harmony! \n")

print("Let's get started. Please enter your current weight (in lbs): ")
current_weight = getUserWeight()

print("\nGreat! Now please enter your current height (in inches): ")
current_height = getUserHeight()

body_mass_index = calculateBMI(current_weight, current_height)

if(body_mass_index ~= 0) then
    bmiCheck(body_mass_index)
end

print("\nThank you for using Health in Harmony! Goodbye!")