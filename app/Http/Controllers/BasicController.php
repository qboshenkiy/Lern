<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageModel;

class BasicController extends Controller
{
    public function __construct()
    {
        $this->messageModel = new MessageModel();
    }
    public function index ()
    {
        return view('static.home');
    }

    public function about ()
    {
        return view('static.about');
    }

    public function contact ()
    {
        return view('form.contact');
    }
    public function submitContactMessage (Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $request->only(['name', 'email', 'message']);
        $data=[
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
        $this->messageModel->saveMessage($data);

        

        return redirect()
            ->route('contact')
            ->with('success', 'Your message has been submitted successfully.');
    }
}
