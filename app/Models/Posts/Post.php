<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $fillable = [
        'user_id',
        'post_title',
        'post',
    ];

    public function user(){
        return $this->belongsTo('App\Models\Users\User');
    }

    public function postComments(){
        return $this->hasMany('App\Models\Posts\PostComment');
    }

    public function subCategories(){
        // リレーションの定義
        // 多対多のリレーション
        return $this->belongsToMany('App\Models\Categories\SubCategory', 'post_sub_categories', 'post_id', 'sub_category_id')->withPivot('id');
        // belongsToMany('関係するモデル', '中間テーブルのテーブル名', '中間テーブル内の自分のID名', '中間テーブル内の相手のID名')->withPivot('他に追加したいカラム');
    }

    // コメント数
    public function commentCounts($post_id){
        return Post::with('postComments')->find($post_id)->postComments()->count();
        // PostモデルのpostComments(postsとpost_commentsテーブル)を取得->post_idを取得->user_idやcommentなどを取得->カウント数
    }
}
