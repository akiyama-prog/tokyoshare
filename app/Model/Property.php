<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = ['id'];

    /**
     * この物件のサブ写真を取得
     */
    public function sub_pictures()
    {
        return $this->hasMany('App\Model\SubPicture');
    }

    /**
     * この物件のサブ写真を取得
     */
    public function room_pictures()
    {
        return $this->hasMany('App\Model\RoomPicture');
    }

    /**
     * この物件の部屋を取得
     */
    public function rooms()
    {
        return $this->hasMany('App\Model\Room');
    }

    /**
     * この物件のエリアを取得
     */
    public function area()
    {
        return $this->belongsTo('App\Model\Area');
    }

    /**
     * 最低賃料を取得
     * @param Property $property
     */
    public static function getMinLent(Property $property)
    {
        return $property->rooms()->min('lent');
    }

    /**
     * 最高賃料を取得
     * @param Property $property
     */
    public static function getMaxLent(Property $property)
    {
        return $property->rooms()->max('lent');
    }

    /**
     * 空室数の数をカウント
     * @param Property $property
     */
    public static function countVacancyRooms(Property $property)
    {
        return $property->rooms()->where('is_vacancy', true)->count();
    }
}
