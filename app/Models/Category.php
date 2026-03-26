<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * Représente une catégorie de livres.
 *
 * @property string $name
 */
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    /**
     * Relation : une catégorie contient plusieurs livres.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
