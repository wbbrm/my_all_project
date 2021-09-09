package com.example.foodtoday;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class Dessert extends AppCompatActivity {
    TextView tv1;
    String[] food = {"ไอศกรีม","ผลไม้","เครป"
            ,"ข้าวโพดอบเนย","ขนมโตเกียว","วุ้นมะพร้าว"
            ,"ปังเย็น","ขนมปังปิ้ง","โดนัท"
            ,"เค้ก"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_dessert);
        tv1 = (TextView) findViewById(R.id.textView);
        Button btn1 = (Button) findViewById(R.id.button1);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                TextView tv1 = (TextView) findViewById(R.id.textView);
                dessert1 objClass = new dessert1();
                int answer = objClass.randomFC(10);
                tv1.setText(food[answer] + "");
            }
        });
    }
}
