<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopeTextSearch($query, $text_search) {
        if(!empty($text_search)) {
            // $query->where('last_name', 'LIKE',"%{$text_search}%")
            // ->orWhere('first_name', 'LIKE',"%{$text_search}%")
            $query->WhereRaw('CONCAT(first_name, last_name) LIKE ?', '%' .$text_search .'%')
            ->orWhereRaw('CONCAT(first_name, " ",last_name) LIKE ?', '%' .$text_search .'%')
            ->orWhere('email', 'LIKE', '%' .$text_search .'%');
        }
    }

    public function scopeContentSearch($query, $content_search) {
        if(!empty($content_search)) {
            $query->where('category_id', $content_search);
        }
    }

    public function scopeGenderSearch($query, $gender_search) {
        if(!empty($gender_search)) {
            $query->where('gender', $gender_search);
        }
    }

    public function scopeDateSearch($query, $date_search) {
        if(!empty($date_search)) {
            $query->whereDate('created_at', $date_search);
        }
    }

}
