<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announcement extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * 
     *  Table name
     * 
     */
    protected $table = 'announcements';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'description', 'content', 'user_id', 'company_id'];


    /**
     * 
     *  Soft delete
     * 
     */
    protected $dates = ['deleted_at'];



    /**
     * 
     *  Relation between announcement and user  
     * 
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



    /**
     * 
     *  Relation between announcement and company  
     * 
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
