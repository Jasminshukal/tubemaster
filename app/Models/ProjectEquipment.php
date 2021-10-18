<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEquipment extends Model
{
    use HasFactory;

    protected $table = "project_equipments";

    protected $fillable=[
        'projects_id','equipments_id','status'
    ];

    public function Project()
    {
        return $this->belongsTo(Project::class);
    }

    public function equipments()
    {
        return $this->hasOne(Equipment::class,'id','equipments_id');
    }
}
