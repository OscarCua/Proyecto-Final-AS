<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encargado
 *
 * @property $id
 * @property $dpi
 * @property $nombre1
 * @property $nombre2
 * @property $nombre3
 * @property $apellido1
 * @property $apellido2
 * @property $fecha_nac
 * @property $tel1
 * @property $tel2
 * @property $direcc
 * @property $created_at
 * @property $updated_at
 *
 * @property Parentesco[] $parentescos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Encargado extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['dpi', 'nombre1', 'nombre2', 'nombre3', 'apellido1', 'apellido2', 'fecha_nac', 'tel1', 'tel2', 'direcc'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parentescos()
    {
        return $this->hasMany(\App\Models\Parentesco::class, 'id', 'encargado_fk');
    }
    
}
