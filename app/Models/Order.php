<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medico_id',
        'od_esf',
        'od_cyl',
        'od_eje',
        'od_codigo',
        'od_av',
        'oi_esf',
        'oi_cyl',
        'oi_eje',
        'oi_codigo',
        'oi_av',
        'color',
        'add',
        'bifocal',
        'dep',
        'alt',
        'observaciones',
        'tipo_lente',
        'fotocromatico',
        'material',
        'filtro',
        'dx',
    ];

    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the medico that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
 
}
