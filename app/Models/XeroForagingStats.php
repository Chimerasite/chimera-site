<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\XeroForageables;
use App\Models\XeroForagingLocations;

class XeroForagingStats extends Model
{
    use HasFactory;

    protected $fillable = [
        'foraging_location_id',
        'forageable_id',
        'amount',
    ];

    protected $rules = [
        'name' => [
            'required',
            'unique:XeroForagingStats,name',
        ],
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(XeroForagingLocations::class);
    }

    public function forageable(): BelongsTo
    {
        return $this->belongsTo(XeroForageables::class);
    }
}
