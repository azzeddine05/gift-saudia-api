<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadyModelReplyFile extends Model
{
    protected $table = 'ready_model_replies_files';
    protected $fillable = [
        'name', 'type', 'size', 'ready_model_reply_id'
    ];

    public function replay()
    {
        return $this->belongsTo('App\ReadyModelReply','ready_model_reply_id');
    }
    
}
