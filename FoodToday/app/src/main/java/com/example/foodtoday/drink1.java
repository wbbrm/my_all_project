package com.example.foodtoday;

import java.util.Random;

public class drink1 {
    public int randomFC(int temp) {
        int randomInt = 0;
        Random randomGenerator = new Random();
        for (int i = 0; i < 13; i++) {
            randomInt = randomGenerator.nextInt(temp);
        }
        return randomInt;
    }
}
