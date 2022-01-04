package com.example.kalkulatorlaba

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast
import com.example.kalkulatorlaba.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        val bind = ActivityMainBinding.inflate(layoutInflater)
        setContentView(bind.root)

        bind.btnHitung.setOnClickListener {
            // validation
            if (bind.etOmset.text.isEmpty() || bind.etCost.text.isEmpty()) {
                Toast.makeText(this, "Harap isi formulir dengan benar!", Toast.LENGTH_SHORT).show()
                return@setOnClickListener
            }

            val omset = bind.etOmset.text.toString().toInt()
            val cost = bind.etCost.text.toString().toInt()

            val result = omset - cost
            bind.tvResult.text = "Profit: IDR " + result.toString() +",-"
        }
    }
}