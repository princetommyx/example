<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // <-- Make sure to import this!
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';
   // protected $fillable = ['title', 'salary', 'employer_id'];

   protected $guarded = [];
    // Add this method so Laravel knows how to fetch the employer
    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
};
