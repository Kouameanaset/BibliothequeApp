<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * Représente un livre dans l'application.
 *
 * @property string $title
 * @property string $description
 * @property int $publication_year
 * @property int $author_id
 * @property int $category_id
 */
class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'publication_year',
        'author_id',
        'category_id',
    ];

    /**
     * Relation : un livre appartient à un auteur.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * Relation : un livre appartient à une catégorie.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
