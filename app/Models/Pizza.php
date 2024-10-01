<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded =[];

    protected $casts = [
        'toppings' => 'array',
    ];

    protected $hidden =[
        'user',
    ];

    protected $appends = [
        'chef',
        'last_updated'
    ];

    /**
     * Get the user that owns the Pizz
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getChefAttribute() :string
    {
        return $this->user->name;
    }

    public function getLastUpdatedAttribute() : string
    {
        return $this->updated_at->diffForHumans();
    }
}
