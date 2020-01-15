<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadyModelReplyFile extends Model
{
    protected $table = 'reday_model_replies_files';
    protected $fillable = [
        'name', 'type', 'size', 'replay_id'
    ];

    public function replay()
    {
        return $this->belongsTo(ReadyModelReply::class);
    }
    

//    private function companyChangeStatusRegistred()
//    {
//        $userId = Auth::id();
//        $affectedRows = Company::where('user_id', $userId)->update(['delivred' => true]);
//
//    }
}
