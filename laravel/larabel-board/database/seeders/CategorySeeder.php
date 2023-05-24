<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    //초기 데이터 생성(보편적)
    //1. 시더 클래스를 생성 : php artisan make:seeder CategorySeeder
    //2. database\seeders\DatabaseSeeder->run() 안에 1에서 생성한 시더 클래스를 콜에 추가
    //3. 1에서 생성한 시더 클래스에 레코드 추가 코드르 작성
    //4-1. 개별시더 실행: php artisan db:seed --CategorySeeder
    //4-1. database\seeders\DatabaseSeeder->run()에 설정된 모든 팩토리 실행: php artisan --class=db:seed

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['no'=>'4','name'=>'카테고리4']
            ,['no'=>'5','name'=>'카테고리5']
            ,['no'=>'6','name'=>'카테고리6']
            ,['no'=>'7','name'=>'카테고리7']
            ]
        );
    }
}
