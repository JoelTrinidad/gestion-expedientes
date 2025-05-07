<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expediente extends Model
{
    /** @use HasFactory<\Database\Factories\ExpedienteFactory> */
    use HasFactory;

    protected $fillable = [
        'numero_expediente', 
        'asunto', 
        'fecha_inicio', 
        'id_estatus', 
        'id_usuario_registra'];

    /**
     * Obtiene el usuario asociado a este expediente.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    /**
     * Obtiene el estatus asociado a este expediente.
     */
    public function estatus(): BelongsTo
    {
        return $this->belongsTo(Estatus::class, 'id');
    }
}
