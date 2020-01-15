<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadyModelReply extends Model
{
    protected $table = 'ready_model_replies';
    protected $fillable = [
        'company_id', 'sub_standard_id', 'value'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function file()
    {
        return $this->hasOne(ReadyModelReplyFile::class);//File::class
    }

//    private function companyChangeStatusRegistred()
//    {
//        $userId = Auth::id();
//        $affectedRows = Company::where('user_id', $userId)->update(['delivred' => true]);
//
//    }
}
