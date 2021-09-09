package com.example.mathcardgame;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.os.Handler;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.Arrays;
import java.util.Collections;

public class MainActivity extends AppCompatActivity {

    TextView tv_p1,tv_p2;
    ImageView iv_1,iv_2,iv_3,iv_4,iv_5,iv_6,iv_7,iv_8,iv_9,iv_10,iv_11,iv_12;

    Integer[] cardArray = {101,102,103,104,105,106,201,202,203,204,205,206};

    int bacon101,broccoli102,chocolate103,donut104,eggplant105,hamburger106,bacon201,broccoli202,chocolate203,donut204,eggplant205,hamburger206;

    int firstCard,secondCard;
    int clickfirst,clicksecond;
    int cardNumber = 1;

    int turn = 1;
    int playerpoint = 0, cpupoint = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        tv_p1 = (TextView) findViewById(R.id.tv_p1);
        tv_p2 = (TextView) findViewById(R.id.tv_p2);

        iv_1 = (ImageView) findViewById(R.id.iv_1);
        iv_2 = (ImageView) findViewById(R.id.iv_2);
        iv_3 = (ImageView) findViewById(R.id.iv_3);
        iv_4 = (ImageView) findViewById(R.id.iv_4);
        iv_5 = (ImageView) findViewById(R.id.iv_5);
        iv_6 = (ImageView) findViewById(R.id.iv_6);
        iv_7 = (ImageView) findViewById(R.id.iv_7);
        iv_8 = (ImageView) findViewById(R.id.iv_8);
        iv_9 = (ImageView) findViewById(R.id.iv_9);
        iv_10 = (ImageView) findViewById(R.id.iv_10);
        iv_11 = (ImageView) findViewById(R.id.iv_11);
        iv_12 = (ImageView) findViewById(R.id.iv_12);

        iv_1.setTag("0");
        iv_2.setTag("1");
        iv_3.setTag("2");
        iv_4.setTag("3");
        iv_5.setTag("4");
        iv_6.setTag("5");
        iv_7.setTag("6");
        iv_8.setTag("7");
        iv_9.setTag("8");
        iv_10.setTag("9");
        iv_11.setTag("10");
        iv_12.setTag("11");

        frontOfcardResource();

        Collections.shuffle(Arrays.asList(cardArray));

        tv_p2.setTextColor(Color.GRAY);

        iv_1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_1, thecard);
            }
        });

        iv_2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_2, thecard);
            }
        });

        iv_3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_3, thecard);
            }
        });

        iv_4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_4, thecard);
            }
        });

        iv_5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_5, thecard);
            }
        });

        iv_6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_6, thecard);
            }
        });

        iv_7.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_7, thecard);
            }
        });

        iv_8.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_8, thecard);
            }
        });

        iv_9.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_9, thecard);
            }
        });

        iv_10.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_10, thecard);
            }
        });

        iv_11.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_11, thecard);
            }
        });

        iv_12.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int thecard = Integer.parseInt((String) view.getTag());
                doStuff(iv_12, thecard);
            }
        });

    }

    private void doStuff(ImageView iv, int thecard) {
        if (cardArray[thecard] == 101) {
            iv.setImageResource(bacon101);
        } else if (cardArray[thecard] == 102) {
            iv.setImageResource(broccoli102);
        } else if (cardArray[thecard] == 103) {
            iv.setImageResource(chocolate103);
        } else if (cardArray[thecard] == 104) {
            iv.setImageResource(donut104);
        } else if (cardArray[thecard] == 105) {
            iv.setImageResource(eggplant105);
        } else if (cardArray[thecard] == 106) {
            iv.setImageResource(hamburger106);
        } else if (cardArray[thecard] == 201) {
            iv.setImageResource(bacon201);
        } else if (cardArray[thecard] == 202) {
            iv.setImageResource(broccoli202);
        } else if (cardArray[thecard] == 203) {
            iv.setImageResource(chocolate203);
        } else if (cardArray[thecard] == 204) {
            iv.setImageResource(donut204);
        } else if (cardArray[thecard] == 205) {
            iv.setImageResource(eggplant205);
        } else if (cardArray[thecard] == 206) {
            iv.setImageResource(hamburger206);
        }

        if (cardNumber == 1) {
            firstCard = cardArray[thecard];
            if (firstCard > 200) {
                firstCard = firstCard - 100;
            }
            cardNumber = 2;
            clickfirst = thecard;

            iv.setEnabled(false);
        } else if (cardNumber == 2) {
            secondCard = cardArray[thecard];
            if (secondCard > 200) {
                secondCard = secondCard - 100;
            }
            cardNumber = 1;
            clicksecond = thecard;

            iv_1.setEnabled(false);
            iv_2.setEnabled(false);
            iv_3.setEnabled(false);
            iv_4.setEnabled(false);
            iv_5.setEnabled(false);
            iv_6.setEnabled(false);
            iv_7.setEnabled(false);
            iv_8.setEnabled(false);
            iv_9.setEnabled(false);
            iv_10.setEnabled(false);
            iv_11.setEnabled(false);
            iv_12.setEnabled(false);

            Handler handler = new Handler();
            handler.postDelayed(new Runnable() {
                @Override
                public void run() {
                    calculate();
                }
            },1000);
        }
    }

    private void calculate() {
        if (firstCard == secondCard) {
            if (clickfirst == 0) {
                iv_1.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 1) {
                iv_2.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 2) {
                iv_3.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 3) {
                iv_4.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 4) {
                iv_5.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 5) {
                iv_6.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 6) {
                iv_7.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 7) {
                iv_8.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 8) {
                iv_9.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 9) {
                iv_10.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 10) {
                iv_11.setVisibility(View.INVISIBLE);
            } else if (clickfirst == 11) {
                iv_12.setVisibility(View.INVISIBLE);
            }

            if (clicksecond == 0) {
                iv_1.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 1) {
                iv_2.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 2) {
                iv_3.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 3) {
                iv_4.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 4) {
                iv_5.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 5) {
                iv_6.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 6) {
                iv_7.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 7) {
                iv_8.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 8) {
                iv_9.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 9) {
                iv_10.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 10) {
                iv_11.setVisibility(View.INVISIBLE);
            } else if (clicksecond == 11) {
                iv_12.setVisibility(View.INVISIBLE);
            }

            if (turn == 1) {
                playerpoint ++;
                tv_p1.setText("P1 : " + playerpoint);
            } else if (turn == 2) {
                cpupoint ++;
                tv_p2.setText("P2 : " + cpupoint);
            }
        } else {

            iv_1.setImageResource(R.drawable.card);
            iv_2.setImageResource(R.drawable.card);
            iv_3.setImageResource(R.drawable.card);
            iv_4.setImageResource(R.drawable.card);
            iv_5.setImageResource(R.drawable.card);
            iv_6.setImageResource(R.drawable.card);
            iv_7.setImageResource(R.drawable.card);
            iv_8.setImageResource(R.drawable.card);
            iv_9.setImageResource(R.drawable.card);
            iv_10.setImageResource(R.drawable.card);
            iv_11.setImageResource(R.drawable.card);
            iv_12.setImageResource(R.drawable.card);

            if (turn == 1) {
                turn = 2;
                tv_p1.setTextColor(Color.GRAY);
                tv_p2.setTextColor(Color.BLACK);
            } else if (turn == 2) {
                turn = 1;
                tv_p2.setTextColor(Color.GRAY);
                tv_p1.setTextColor(Color.BLACK);

            }
        }

        iv_1.setEnabled(true);
        iv_2.setEnabled(true);
        iv_3.setEnabled(true);
        iv_4.setEnabled(true);
        iv_5.setEnabled(true);
        iv_6.setEnabled(true);
        iv_7.setEnabled(true);
        iv_8.setEnabled(true);
        iv_9.setEnabled(true);
        iv_10.setEnabled(true);
        iv_11.setEnabled(true);
        iv_12.setEnabled(true);

        checkEnd();
    }

    private void checkEnd() {
        if (iv_1.getVisibility() == View.INVISIBLE &&
                iv_2.getVisibility() == View.INVISIBLE &&
                iv_3.getVisibility() == View.INVISIBLE &&
                iv_4.getVisibility() == View.INVISIBLE &&
                iv_5.getVisibility() == View.INVISIBLE &&
                iv_6.getVisibility() == View.INVISIBLE &&
                iv_7.getVisibility() == View.INVISIBLE &&
                iv_8.getVisibility() == View.INVISIBLE &&
                iv_9.getVisibility() == View.INVISIBLE &&
                iv_10.getVisibility() == View.INVISIBLE &&
                iv_11.getVisibility() == View.INVISIBLE &&
                iv_12.getVisibility() == View.INVISIBLE) {

            AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder(MainActivity.this);
            alertDialogBuilder
                    .setMessage("GAME OVER!!\nP1 : " + playerpoint + "\nP2 : " + cpupoint)
                    .setCancelable(false)
                    .setPositiveButton("New", new DialogInterface.OnClickListener() {
                        @Override
                        public void onClick(DialogInterface dialog, int which) {
                            Intent intent = new Intent(getApplicationContext(),MainActivity.class);
                            startActivity(intent);
                            finish();
                        }
                    })

                    .setNegativeButton("Exit", new DialogInterface.OnClickListener() {
                        @Override
                        public void onClick(DialogInterface dialog, int which) {
                            finish();
                        }
                    });

            AlertDialog alertDialog = alertDialogBuilder.create();
            alertDialog.show();

        }
    }

    private void frontOfcardResource() {

        bacon101 = R.drawable.bacon1;
        broccoli102 = R.drawable.broccoli1;
        chocolate103 = R.drawable.chocolate1;
        donut104 = R.drawable.donut1;
        eggplant105 = R.drawable.eggplant1;
        hamburger106 = R.drawable.hamburger1;
        bacon201 = R.drawable.bacon2;
        broccoli202 = R.drawable.broccoli2;
        chocolate203 = R.drawable.chocolate;
        donut204 = R.drawable.donut2;
        eggplant205 = R.drawable.eggplant2;
        hamburger206 = R.drawable.ham;
    }
}