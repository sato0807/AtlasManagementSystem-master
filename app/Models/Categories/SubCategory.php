<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;
    protected $fillable = [
        'main_category_id',
        'sub_category',
    ];
    public function mainCategory(){
        // リレーションの定義
        // 多対1のリレーション
        return $this->belongsTo('App\Models\Categories\MainCategory');
    }

    public function posts(){
        // リレーションの定義
        // 多対多のリレーション
        return $this->belongsToMany('App\Models\Posts\Post', 'post_sub_categories', 'sub_category_id', 'post_id')->withPivot('id');
        // belongsToMany('関係するモデル', '中間テーブルのテーブル名', '中間テーブル内の自分のID名', '中間テーブル内の相手のID名')->withPivot('他に追加したいカラム');
    }
}
