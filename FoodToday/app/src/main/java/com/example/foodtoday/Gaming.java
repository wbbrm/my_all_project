package com.example.foodtoday;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class Gaming extends AppCompatActivity {
    TextView tv1;
    String[] food = {"คนข้างซ้ายดื่มหมดแก้ว","คนข้างขวาดื่มหมดแก้ว","คนสุ่มดื่ม 2 แก้ว"
            ,"คนตรงข้ามดื่มหมดแก้ว","ให้ใครก็ได้ดื่ม"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_gaming);
        tv1 = (TextView) findViewById(R.id.textView);
        Button btn1 = (Button) findViewById(R.id.button1);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                TextView tv1 = (TextView) findViewById(R.id.textView);
                gaming1 objClass = new gaming1();
                int answer = objClass.randomFC(5);
                tv1.setText(food[answer] + "");
            }
        });
    }
}
