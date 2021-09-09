package com.example.foodtoday;

import java.util.Random;

public class dessert1 {
    public int randomFC(int temp) {
        int randomInt = 0;
        Random randomGenerator = new Random();
        for (int i = 0; i < 10; i++) {
            randomInt = randomGenerator.nextInt(temp);
        }
        return randomInt;
    }
}
