<?php

namespace App\Http\Controllers;
use Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
    {
            public function store(Request $request)
            {
                if ( ! Newsletter::isSubscribed($request->user_email) ) {
                    Newsletter::subscribePending($request->user_email);
                }
            return redirect('/')->success('status', 'Você está inscrito');
    }
}
