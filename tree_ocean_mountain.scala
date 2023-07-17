import scala.collection.mutable.HashMap

// Create an object to represent Health in Harmony
object HealthInHarmony {

  // Define a HashMap to store the health data
  val healthData: HashMap[String, Int] = HashMap()

  // Define a function to set the health data
  def setHealthData(data: (String, Int)) = {
    healthData.+=(data)
  }

  // Define a function to get Health in Harmony
  def getHealthInHarmony(name: String): Option[Int] = {
    healthData.get(name)
  }

  // Function to calculate BMI
  def calculateBMI(weight: Double, height: Double): Double = {
    weight / (height * height)
  }

  // Function to calculate Healthy Weight
  def calculateHealthyWeight(height: Double, bmi: Double): Double = {
    height * height * bmi
  }

  // Function to calculate BMR
  def calculateBMR(weight: Double, height: Double, age: Int): Double = {
    (10 * weight) + (6.25 * height) - (5 * age) + 5
  }

  // Function to Calculate Metabolic Age
  def calculateMetabolicAge(bmr: Double): Double = {
    bmr / 1.2
  }

  // Function to calculate Daily Calorie needs
  def calculateCalorieNeeds(bmr: Double): Double = {
    bmr * 1.3
  }

  // Function to calculate Weight Change
  def calculateWeightChange(targetWeight: Double, currentWeight: Double): Double = {
    targetWeight - currentWeight
  }

  // Function to calculate Daily Calories
  def calculateDailyCalories(targetCalories: Double, currentWeight: Double): Double = {
    targetCalories + (currentWeight * 500)
  }

}