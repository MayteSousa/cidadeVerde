<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecoponto extends Model
{
    use HasFactory;

    public $table = 'ecopontos';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'latitude',
        'longitude',
        'created_by_id',#responsible
    ];



  /*  public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
*/


    public function scopeSearchResults($query)
    {
        return $query->where('active', 1)
            ->when(request()->filled('search'), function($query) {
                $query->where(function($query) {
                    $search = request()->input('search');
                    $query->where('name', 'LIKE', "%$search%")
                        ->orWhere('address', 'LIKE', "%$search%");
                });
            });
    }
}
