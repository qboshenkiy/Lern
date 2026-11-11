<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $fillable = ['name', 'email', 'message'];
    public $timestamps = true;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $connection = 'mysql';
    
    function saveMessage($data)
    {
        return self::create($data);
    }
    function getAllMessages()
    {
        return self::all();
    }
    function getMessageById($id)
    {
        return self::find($id);
    }
    function updateMessage($id, $data)
    {
        $message = self::find($id);
        if ($message) {
            $message->update($data);
            return $message;
        }
        return null;
    }
    function deleteMessage($id)
    {
        $message = self::find($id);
        if ($message) {
            $message->delete();
            return true;
        }
        return false;
    }


}
