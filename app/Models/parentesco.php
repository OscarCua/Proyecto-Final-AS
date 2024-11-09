<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parentesco
 *
 * @property $id
 * @property $alumno_fk
 * @property $encargado_fk
 * @property $tipo_parentesco
 * @property $prioridad
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Encargado $encargado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parentesco extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['alumno_fk', 'encargado_fk', 'tipo_parentesco', 'prioridad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumno()
    {
        return $this->belongsTo(\App\Models\Alumno::class, 'alumno_fk', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function encargado()
    {
        return $this->belongsTo(\App\Models\Encargado::class, 'encargado_fk', 'id');
    }
    
}
