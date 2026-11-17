<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table            = 'clientes';
    protected $primaryKey       = 'cliente_id';
    protected $returnType       = 'array';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'fecha_suscripcion',
        'correo_electronico',
        'telefono_movil'
    ];

    protected $useTimestamps = false;
}
