package com.example.foodtoday;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class Restaurant extends AppCompatActivity {
    TextView tv1;
    String[] food = {"Swensen's","KFC","McDonal's"
            ,"Zaap Classic","Chick Shabu","แม่ศรีเรือน"
            ,"สุกี้ตี๋น้อย","Bar B Q Resort","SukiShi"
            ,"Shabushi","MK","บาร์บีก้อน"
            ,"Fuji","Black Canyon"
            ,"Yayoi","Hachiban","Katstuya"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_restaurant);
        tv1 = (TextView) findViewById(R.id.textView);
        Button btn1 = (Button) findViewById(R.id.button1);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                TextView tv1 = (TextView) findViewById(R.id.textView);
                restaurant1 objClass = new restaurant1();
                int answer = objClass.randomFC(18);
                tv1.setText(food[answer] + "");
            }
        });
    }
}
