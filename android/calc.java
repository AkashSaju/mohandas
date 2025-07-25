package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
EditText e1,e2,e3,e4;
Button b1,b2,b3,b4;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        e1=findViewById(R.id.editTextText1);
        e2=findViewById(R.id.editTextText2);
        e3=findViewById(R.id.editTextText3);
        e4=findViewById(R.id.editTextText4);
        b1=findViewById(R.id.button);
        b2=findViewById(R.id.button2);
        b3=findViewById(R.id.button3);
        b4=findViewById(R.id.button4);
        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int n1=Integer.parseInt(e1.getText().toString());
                int n2=Integer.parseInt(e3.getText().toString());
                int n3=n1+n2;
                String n4=String.valueOf(n3);
                e4.setText(n4);
                String n5="      +";
                e2.setText(n5);

            }
        });
        b2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int n1=Integer.parseInt(e1.getText().toString());
                int n2=Integer.parseInt(e3.getText().toString());
                int n3=n1-n2;
                String n4=String.valueOf(n3);
                e4.setText(n4);
                String n5="      -";
                e2.setText(n5);
            }
        });
        b3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int n1=Integer.parseInt(e1.getText().toString());
                int n2=Integer.parseInt(e3.getText().toString());
                int n3=n1*n2;
                String n4=String.valueOf(n3);
                e4.setText(n4);
                String n5="      *";
                e2.setText(n5);
            }
        });
        b4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                float n1=Integer.parseInt(e1.getText().toString());
                float n2=Integer.parseInt(e3.getText().toString());
                float n3=n1/n2;
                String n4=String.valueOf(n3);
                e4.setText(n4);
                String n5="      /";
                e2.setText(n5);
            }
        });
    }
}