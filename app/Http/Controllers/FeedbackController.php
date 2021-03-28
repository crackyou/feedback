<?php

namespace App\Http\Controllers;
;

use App\Events\SendFeedback;
use App\Models\Feedback;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function sendFeedback(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:5|max:30',
            'email' => 'required|email',
            'feedback' => 'required|string|max:300',
        ]);

        $input = $request->all();

        $feedback= new Feedback();

        $feedback->name = $input['name'];
        $feedback->email = $input['email'];
        $feedback->feedback = $input['feedback'];
        $res = $feedback->save();

        if($res){
            Event::dispatch(new SendFeedback($feedback));
            Session::flash('message', 'От вас получен обратный связь. Ждите ответа');
        }
        else{
            Session::flash('message', 'Ошибка при отправке.');
        }

        return redirect()->back();

    }
}
