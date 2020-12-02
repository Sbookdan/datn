<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Session;
use Mail;

class contactController extends Controller
{
    public function index()
    {
        $ds = contact::all();
        return view('admin.contact.index', compact('ds'));
    }
    public function create()
    {
        return view('admin.contact.create');
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
        $tl = contact::find($id);
        $tl->delete();
        return redirect('/contact')->with('success', 'Đã xóa xong');
    }
    public function sendEmail(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send(
            'Email.mailfb',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'phone' => $request->get('phone'),
                'body_message' => $request->get('message'),
            ),
            function ($message) use ($request) {
                $message->from($request->input('email'));
                $message->to('truongdang20002@gmail.com');
            }
        );

        return back()->with('success', 'Cám ơn bạn đã liên hệ!!!');
    }
}
