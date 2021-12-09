<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name_company', 'activity_id', 'name_partner', 'address', 'phone_number', 'email'];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
