<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{

    use HasFactory;
    // Tell the model exactly which table to use (change this if your table is named differently)
    protected $table = 'job_listings';

    // Allow these fields to be filled via ::create()
    protected $fillable = ['title', 'salary', 'employer_id'];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
}
