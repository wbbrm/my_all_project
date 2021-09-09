package com.example.foodtoday;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class Food extends AppCompatActivity {
    TextView tv1;
    String[] food = {"ผัดกระเพรา","สุกี้น้ำ","สุกี้แห้ง"
            ,"เย็นตาโฟ","ก๋วยเตี๋ยวน้ำใส","ก๋วยเตี๋ยวต้มยำ"
            ,"ก๋วยเตี๋ยวน้ำตก","ก๋วยเตี๋ยวไก่","ข้าวยำไก่ทอด"
            ,"ข้าวไข่เจียว","ข้าวไก่ทอด","ยำ"
            ,"ส้มตำ","ข้าวราดแกง","ราดหน้า"
            ,"ข้าวมันไก่","ข้าวขาหมู","ข้าวหมูทอด"
            ,"ข้าวคอหมูย่าง","หมูปิ้ง+ข้าวเหนียว","หมูทอด+ข้าวเหนียว"
            ,"ซูชิ","ชาบูไม้เสียบ","หม่าล่า"
            ,"ลูกชิ้นปิ้ง","ข้าวหมูกรอบ","ข้าวหมูแดง"
            ,"บะหมี่หมูแดง","บะหมี่เกี๊ยว","บะหมี่เกี๊ยวต้มยำ"
            ,"ไก่ทอด+ข้าวเหนียว","ก๋วยจั๊บญวน","ข้าวหมูทงคัตซึ"
            ,"ข้าวไก่เทริยากิ","สเต็ก"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_food);
        tv1 = (TextView) findViewById(R.id.textView);
        Button btn1 = (Button) findViewById(R.id.button1);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                TextView tv1 = (TextView) findViewById(R.id.textView);
                food1 objClass = new food1();
                int answer = objClass.randomFC(20);
                tv1.setText(food[answer] + "");
            }
        });
    }
}
