<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'result',
        'visit_date'
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
