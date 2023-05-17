<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_velneo',
        'serie',
        'forma_pago',
        'ruc_receptor',
        'razon_social',
        'direccion',
        'moneda',
        'ruc_emisor',
        'fecha',
        'serie_completa',
        'num_doc',
        'num_fact',
        'obs',
        'guia',
        'detalle_sunat',
        'bas_red',
        'bas_sup',
        'bas_tot',
        'iva_gen',
        'iva_tot',
        'total_icbper',
        'tot_fac',
        'motivos_nc',
        'motivos_nd',
        'fecha_baja',
        'fecha_vencimiento',
        'url_pdf',
        'url_cdr',
        'url_xml',
        'url_txt'

    ];
}
