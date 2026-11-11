<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageModel;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->messageModel = new MessageModel();
    }
    public function index()
    {
        $messages = $this->messageModel->getAllMessages();
        return view('messages.message_list', compact('messages'));
    }
    public function show($id)
    {
        $message = $this->messageModel->getMessageById($id);
        if (!$message) {
            return redirect()->route('messages.index')->with('error', 'Message not found.');
        }
        return view('messages.message_show', compact('message'));
    }
    public function edit($id)
    {
        $message = $this->messageModel->getMessageById($id);
        if (!$message) {
            return redirect()->route('messages.index')->with('error', 'Message not found.');    
        }
        return view('messages.message_edit', compact('message'));   
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = $request->only(['name', 'email', 'message']);
        $updatedMessage = $this->messageModel->updateMessage($id, $data);

        if (!$updatedMessage) {
            return redirect()->route('messages.index')->with('error', 'Message not found.');
        }

        return redirect()->route('messages.show', $id)->with('success', 'Message updated successfully.');
    }
    public function destroy($id)
    {
        $deleted = $this->messageModel->deleteMessage($id);

        if (!$deleted) {
            return redirect()->route('messages.index')->with('error', 'Message not found.');
        }

        return redirect()->route('messages.index')->with('success', 'Message deleted successfully.');
    }
}
