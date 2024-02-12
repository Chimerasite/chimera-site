<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\XeroForagingStats;

class XeroForagingLocations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
    ];

    public function stats(): HasMany
    {
        return $this->hasMany(XeroForagingStats::class);
    }
}
