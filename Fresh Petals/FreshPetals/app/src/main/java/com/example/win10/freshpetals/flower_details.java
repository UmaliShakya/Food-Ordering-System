package com.example.win10.freshpetals;

import android.annotation.SuppressLint;
import android.database.sqlite.SQLiteDatabase;
import android.support.design.widget.CollapsingToolbarLayout;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;
import android.widget.TextView;

import com.cepheuen.elegantnumberbutton.view.ElegantNumberButton;

public class flower_details extends AppCompatActivity {

    TextView Flower_No, Flower_price,flower_description;
    ImageView image_flower;
    CollapsingToolbarLayout collapsingToolbarLayout;
    FloatingActionButton cart;
    ElegantNumberButton numberButton;

    String flowerId="";

    SQLiteDatabase database;

    @SuppressLint("ResourceType")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_flower_details);

        //Firebase


        //Init view
        numberButton = (ElegantNumberButton)findViewById(R.id.number_button);
        cart = (FloatingActionButton)findViewById(R.id.btnCart);

        flower_description = (TextView)findViewById(R.id.flower_description);
        Flower_No = (TextView)findViewById(R.id.Flower_No);
        Flower_price = (TextView)findViewById(R.id.Flower_price);
        image_flower = (ImageView)findViewById(R.id.image_flower) ;

        collapsingToolbarLayout = (CollapsingToolbarLayout)findViewById(R.id.collapsing);
        collapsingToolbarLayout.setExpandedTitleTextAppearance(R.id.ExpandedAppbar);
        collapsingToolbarLayout.setCollapsedTitleTextAppearance(R.style.CollapsedAppbar);

    }
}
