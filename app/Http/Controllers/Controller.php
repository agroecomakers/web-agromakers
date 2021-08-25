<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function set_language($lang)
    {
        if (array_key_exists($lang, config('language'))){
            session()->put('applocate', $lang);
        }
        return back();
    }

    public function contact(Request $request)
    {
        $message = $request->validate([
            'team'  => ['required', Rule::in(['hardware', 'software', 'spices', 'other'])],
            'name'  => 'required',
            'phone' => 'required|numeric|digits:10',
            'email' => 'email:rfc,dns',
            'message'=> 'required',
        ]);

        Mail::to('cesaralejandroantolinez@gmail.com')->queue(new MessageRecived($message));

        return back()->with('message-confirmation', __('footer.message-success'));
    }

}
