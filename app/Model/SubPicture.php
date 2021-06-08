<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubPicture extends Model
{
    protected $guarded = ['id'];

    /**
     * このサブ写真のデータをもつ物件を取得
     */
    public function property()
    {
        return $this->belongsTo('App\Model\Property');
    }
}
