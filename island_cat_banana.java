package healthinharmony;

public class HealthInHarmony {

    private int balance;
    private int dailyMeal;

    public HealthInHarmony() {
        balance = 0;
        dailyMeal = 0;
    }

    public int getBalance() {
        return balance;
    }

    public void setBalance(int balance) {
        this.balance = balance;
    }

    public int getDailyMeal() {
        return dailyMeal;
    }

    public void setDailyMeal(int dailyMeal) {
        this.dailyMeal = dailyMeal;
    }

    public void feedHealth() {
        balance += dailyMeal;
    }

    public void consumeHealth() {
        balance -= dailyMeal;
    }

    public void healthyLifestyle() {
        int dailyExercise = 30;
        int dailyWater = 1;
        int dailyFruits = 1;
        int dailyVegetables = 2;

        balance += dailyExercise;
        balance += dailyWater;
        balance += dailyFruits;
        balance += dailyVegetables;
    }

    public void unhealthyLifestyle() {
        int dailyCigarettes = 1;
        int dailyAlcohol = 1;
        int dailyJunkFood = 2;

        balance -= dailyCigarettes;
        balance -= dailyAlcohol;
        balance -= dailyJunkFood;
    }

    public void checkBalance() {
        if (balance > 0) {
            System.out.println("Your health is in harmony!");
        } else {
            System.out.println("Your health is not in harmony.");
        }
    }

}