<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];

    // Relationship with the Announcement model
    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'company_id');
    }
}
