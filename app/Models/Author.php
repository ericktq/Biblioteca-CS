<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'linkedin_url',
        'email',
    ];

    /**
     * > The `papers()` function returns a collection of all the papers that belong to the user
     *
     * @return A collection of papers
     */
    public function papers()
    {
        return $this->belongsToMany(Paper::class);
    }
}
