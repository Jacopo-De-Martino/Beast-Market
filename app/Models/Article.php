<?php

namespace App\Models;

use App\Models\Image;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    // use Searchable;
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id'
    ];

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price, //da vedere se serve o no l'ho aggiunto io per filtrare anche per prezzo in teoria
            'category' => $this->category,
        ];
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // public function setAccepted($value)
    // {
    //     $this->is_accepted = $value;
    //     $this->save();
    //     return true;
    // }

    // public static function toBeRevisedCount()
    // {
    //     return Article::where('is_accepted', null)->count();
    // }
    // ! funzione di relazione per le immagini HasMany
    // public function images(): HasMany
    // {
    //      return $this->hasMany(Image::class);
    // }
}
