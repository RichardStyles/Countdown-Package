<?php

Route::get('/', function () {
    $endDate = \Carbon\Carbon::create(2018,8,11,12,00,00,'Europe/London');

    return view('countdown::show',compact('endDate'));
});
