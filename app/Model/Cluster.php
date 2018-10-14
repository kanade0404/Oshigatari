<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $table = 'clusters';
    protected $primaryKey = 'id';
    /**
     * @var array Mass Assignment対策(編集可能なカラム)
     */
    protected $fillable = [
        'name', 'description', 'is_active', 'updated_at'
    ];
}
