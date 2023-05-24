<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Listings extends Model
{
    use HasFactory;

    public static function getListingById($id)
    {
        $listing = (array) DB::selectOne("SELECT * FROM `listings` WHERE id = :id", ['id' => $id]);
        return $listing;
    }

    public function scopeFilter($query, array $filters) {


        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('description', 'like', '%' . request('search') . '%')
                  ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
