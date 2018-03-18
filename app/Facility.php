<?php

namespace App;

use App\Court;
use App\Maintenance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
	use SoftDeletes;
	
    protected $table    = 'facilities';
    
    protected $fillable = ['name', 'brand', 'price', 'purchased_at', 'court_id'];
    
    protected $dates    = ['deleted_at'];
    
    protected $hidden   = ['created_at', 'updated_at', 'deleted_at', 'court_id'];

    public function court()
    {
    	return $this->belongsTo(Court::class);
    }

    public function maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
}