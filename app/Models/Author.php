<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 *
 * Représente un auteur dans l'application.
 *
 * @property string $last_name
 * @property string $first_name
 * @property string $biography
 * @property string $birth_date
 */
class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'last_name',
        'first_name',
        'biography',
        'birth_date',
    ];

    /**
     * Relation : un auteur possède plusieurs livres.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
