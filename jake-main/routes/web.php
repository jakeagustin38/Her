<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/backup-restore', function (){
    Artisan::call('backup:restore', [
        '--backup' => 'latest',
        '--no-interaction' => true,
        '--reset' => true,
    ]);
    return redirect()->back();
})->name('backuprestore');
