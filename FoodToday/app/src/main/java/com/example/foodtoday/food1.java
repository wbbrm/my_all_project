package com.example.foodtoday;

import java.util.Random;

public class food1 {
    public int randomFC(int temp) {
        int randomInt = 0;
        Random randomGenerator = new Random();
        for (int i = 0; i < 20; i++) {
            randomInt = randomGenerator.nextInt(temp);
        }
        return randomInt;
    }
}
