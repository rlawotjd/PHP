<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    //타임 캐스트
    protected $casts = [
        'completed'=>'boolean',
    ];

    protected $dates = [ //데이트 설정에 추가
        'completed_at'
    ];

    protected function serializeDate(DateTimeInterface $date) //api json 파싱할떄 데이터를 타임존으로 맞추기 위한 설정
    {
        return $date->format('Y-m-d H:i:s');
    }
}
