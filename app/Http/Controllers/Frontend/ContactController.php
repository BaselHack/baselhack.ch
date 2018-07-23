<?php

namespace App\Http\Controllers\Frontend;

use App\App\Controllers\Controller;
use App\Http\Requests\Frontend\StoreContactRequest;
use App\Jobs\RedirectContactRequest;
use Illuminate\Support\Facades\Lang;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_page = 'contact';

        return view('frontend.contact.index', compact('current_page'));
    }

    public function store(StoreContactRequest $request)
    {
        /** @todo Save to Database */

        $contact = [

            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        RedirectContactRequest::dispatch($contact);

        alert()->success(Lang::get('frontend/contact.form.notification.success.title'), Lang::get('frontend/contact.form.notification.success.description'))->autoClose(3000);

        return back();
    }
}
