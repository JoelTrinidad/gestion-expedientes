<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'estatus';

    /**
     * Obtiene los expedientes asociados a este estatus.
     *
     * @return HasMany
     */
    public function expedientes(): HasMany
    {
        return $this->hasMany(Expediente::class, 'estatus_id', 'id');
    }
}
