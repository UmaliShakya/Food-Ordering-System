package com.example.win10.freshpetals;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.Toast;


public class MainActivity extends AppCompatActivity {

    ImageButton rose,orchid,liliy, tulip, carnation, daisy, lotus, anthurium, mix;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        rose = findViewById(R.id.rose);
        orchid = findViewById(R.id.orchid);
        liliy = findViewById(R.id.lily);
        tulip = findViewById(R.id.tulip);
        carnation = findViewById(R.id.carnation);
        daisy = findViewById(R.id.daisy);
        anthurium = findViewById(R.id.anthurium);
        lotus = findViewById(R.id.lotus);
        mix = findViewById(R.id.mix);

        rose.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, Roses.class);
            startActivity(intent);
        });

        orchid.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, Orchids.class);
            startActivity(intent);
        });

        liliy.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, lilies.class);
            startActivity(intent);
        });

        tulip.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, tulips.class);
            startActivity(intent);
        });

        carnation.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, carnations.class);
            startActivity(intent);
        });

        daisy.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, daisy.class);
            startActivity(intent);
        });

        anthurium.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, anthuriums.class);
            startActivity(intent);
        });

        lotus.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, lotus.class);
            startActivity(intent);
        });

        mix.setOnClickListener((View) ->{
            Intent intent = new Intent(MainActivity.this, mix.class);
            startActivity(intent);
        });


        } }

