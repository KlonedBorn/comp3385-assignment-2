<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Mail\Feedback;
use Illuminate\Http\Request;
use Mail;
class FeedbackController extends Controller
{

    function create()
    {
        return view('feedback-form');
    }

    function send(FeedbackRequest $request)
    {
        $name = $request->input('full_name', 'John Doe');
        $email = $request->input('email', 'john.doe@mail.com');
        $comment = $request->input('comment', 'lorem ipsom');
        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
        ->send(new Feedback($name, $email, $comment));
        return redirect('feedback/success');
    }
}
