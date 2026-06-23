<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job_Listing extends Model
{
    // Tell the model exactly which table to use (change this if your table is named differently)
    protected $table = 'job_listings'; 

    // Allow these fields to be filled via ::create()
    protected $fillable = ['title', 'salary'];
}
