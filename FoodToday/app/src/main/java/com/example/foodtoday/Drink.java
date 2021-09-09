package com.example.foodtoday;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class Drink extends AppCompatActivity {
    TextView tv1;
    String[] food = {"น้ำอัดลม","น้ำเปล่า","นมเย็น"
            ,"ชานม","น้ำแดง","น้ำแดงโซดา"
            ,"กาแฟ","น้ำผลไม้ปั่น","น้ำมะนาว"
            ,"น้ำส้ม","ชาเขียว","ชานมไข่มุก"
            ,"น้ำพั้น"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_drink);
        tv1 = (TextView) findViewById(R.id.textView);
        Button btn1 = (Button) findViewById(R.id.button1);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                TextView tv1 = (TextView) findViewById(R.id.textView);
                drink1 objClass = new drink1();
                int answer = objClass.randomFC(13);
                tv1.setText(food[answer] + "");
            }
        });
    }
}
