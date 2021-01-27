<?php

Route::group(['namespace'=>'GulzarAli\Calculator'],function(){
    //return view('calculator::calculator');
    Route::get('calculator',function(){
        return view('calculator::calculator');
    });
});

