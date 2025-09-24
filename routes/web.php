<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioControllerr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

Route::get('/', [PortfolioControllerr::class, 'index']);

Route::post('/contact', function (Request $request) {
    // validate input
    $request->validate([
        'fullname' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string'
    ]);

    // send email
    Mail::to('samsongenesis5@gmail.com')->send(new ContactMail(
        $request->fullname,
        $request->email,
        $request->message
    ));

    return back()->with('success', 'Your message has been sent!');
});
