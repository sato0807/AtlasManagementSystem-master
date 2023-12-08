<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'over_name' => '山本',
            'under_name' => '元柳斎重國',
            'over_name_kana' => 'ヤマモト',
            'under_name_kana' => 'ゲンリュウサイシゲクニ',
            'mail_address' => 'yamamoto.g@gmail.com',
            'sex' => '1',
            'birth_day' => '1270-1-21',
            'role' => '1',
            'password' => bcrypt('yamamoto1111')
        ]);
        DB::table('users')->insert([
            'over_name' => '砕',
            'under_name' => '蜂',
            'over_name_kana' => 'ソイ',
            'under_name_kana' => 'フォン',
            'mail_address' => 'fon.s@gmail.com',
            'sex' => '2',
            'birth_day' => '1790-2-11',
            'role' => '3',
            'password' => bcrypt('fon2222')
        ]);
        DB::table('users')->insert([
            'over_name' => '卯ノ花',
            'under_name' => '烈',
            'over_name_kana' => 'ウノハナ',
            'under_name_kana' => 'レツ',
            'mail_address' => 'unohana.r@gmail.com',
            'sex' => '2',
            'birth_day' => '1980-2-11',
            'role' => '1',
            'password' => bcrypt('unohana4444')
        ]);
        DB::table('users')->insert([
            'over_name' => '朽木',
            'under_name' => '白夜',
            'over_name_kana' => 'クチキ',
            'under_name_kana' => 'ビャクヤ',
            'mail_address' => 'kuchiki.b@gmail.com',
            'sex' => '1',
            'birth_day' => '1750-2-11',
            'role' => '3',
            'password' => bcrypt('kuchiki6666')
        ]);
        DB::table('users')->insert([
            'over_name' => '狛村',
            'under_name' => '左陣',
            'over_name_kana' => 'コマムラ',
            'under_name_kana' => 'サジン',
            'mail_address' => 'komamura.s@gmail.com',
            'sex' => '1',
            'birth_day' => '1670-2-11',
            'role' => '1',
            'password' => bcrypt('komamura7777')
        ]);
        DB::table('users')->insert([
            'over_name' => '京楽',
            'under_name' => '春水',
            'over_name_kana' => 'キョウラク',
            'under_name_kana' => 'シュンスイ',
            'mail_address' => 'kyoraku.s@gmail.com',
            'sex' => '1',
            'birth_day' => '1640-2-11',
            'role' => '1',
            'password' => bcrypt('kyoraku8888')
        ]);
        DB::table('users')->insert([
            'over_name' => '日番谷',
            'under_name' => '冬獅郎',
            'over_name_kana' => 'ヒツガヤ',
            'under_name_kana' => 'トウシロウ',
            'mail_address' => 'hitugaya.t@gmail.com',
            'sex' => '1',
            'birth_day' => '1890-2-11',
            'role' => '2',
            'password' => bcrypt('hitugaya10101010')
        ]);
        DB::table('users')->insert([
            'over_name' => '更木',
            'under_name' => '剣八',
            'over_name_kana' => 'ザラキ',
            'under_name_kana' => 'ケンパチ',
            'mail_address' => 'zaraki.k@gmail.com',
            'sex' => '1',
            'birth_day' => '1720-2-11',
            'role' => '3',
            'password' => bcrypt('zaraki11111111')
        ]);
        DB::table('users')->insert([
            'over_name' => '涅',
            'under_name' => 'マユリ',
            'over_name_kana' => 'クロツチ',
            'under_name_kana' => 'マユリ',
            'mail_address' => 'kurotuchi.m@gmail.com',
            'sex' => '1',
            'birth_day' => '1720-2-11',
            'role' => '2',
            'password' => bcrypt('kurotuchi12121212')
        ]);
        DB::table('users')->insert([
            'over_name' => '浮竹',
            'under_name' => '十四郎',
            'over_name_kana' => 'ウキタケ',
            'under_name_kana' => 'ジュウシロウ',
            'mail_address' => 'ukitake.z@gmail.com',
            'sex' => '1',
            'birth_day' => '1640-2-11',
            'role' => '2',
            'password' => bcrypt('ukitake13131313')
        ]);
    }
}
