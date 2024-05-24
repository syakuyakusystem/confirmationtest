<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Category;

class Contact extends Model
{
    use HasFactory;
    
    protected $table = 'contacts';

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell',
        'address',
        'building',
        'detail',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    public function category():Relation {
        return $this -> belongsTo(Category::class);
    }

    // public function scopeCategorySearch($query, $category_id)
    // {
    //     if (!empty($category_id)) {
    //     $query->where('category_id', $category_id);
    //     }
    // }

    // public function scopeKeywordSearch($query, $keyword)
    // {
    //     if (!empty($keyword)) {
    //     $query->where('content', 'like', '%' . $keyword . '%');
    //     }
    // }
}
