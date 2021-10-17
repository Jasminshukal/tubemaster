<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    const ACTIVE=1,INACTIVE=0;
    protected $fillable=[
        'name','companyname','email','phone','address','city_id','status'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }


}
