<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gastos extends Model
{
    use HasFactory;

    public function getGasto(){
      $gastos = DB::table("cpe_gastos")
                   ->select("*")
                   ->get();

      return $gastos;
    }

    public function createGasto($data){
      $gastos = [
        'tipo_doc' => $data['tipo_doc'],
        'nro_doc' => $data['nro_doc'],
        'razon_social' => $data['razon_social'],
        'descripcion' => $data['descripcion'],
        'f_recepcion' => $data['f_recepcion'],
        'f_emision' => $data['f_emision'],
        'tipo_cpe' => $data['tipo_cpe'],
        'serie' => $data['serie'],
        'numero' => $data['numero'],
        'sub_total' => $data['sub_total'],
        'igv' => $data['igv'],
        'op_grav' => $data['op_grav'],
        'op_inafec' => $data['op_inafec'],
        'op_exone' => $data['op_exone'],
        'rpta_sunat' => $data['rpta_sunat'],
        'estado' => $data['estado'],
        'codigo_usuario' => $data['codigo_usuario'],
        'codigo_usuario_sys' => $data['codigo_usuario_sys'],
      ];

      DB::table('cpe_gastos')
        ->insert($gastos);
    }

    public function updateGasto($data, $iddoc_cpe){
        $gastos = [
          'tipo_doc' => $data['tipo_doc'],
          'nro_doc' => $data['nro_doc'],
          'razon_social' => $data['razon_social'],
          'descripcion' => $data['descripcion'],
          'f_recepcion' => $data['f_recepcion'],
          'f_emision' => $data['f_emision'],
          'tipo_cpe' => $data['tipo_cpe'],
          'serie' => $data['serie'],
          'numero' => $data['numero'],
          'sub_total' => $data['sub_total'],
          'igv' => $data['igv'],
          'op_grav' => $data['op_grav'],
          'op_inafec' => $data['op_inafec'],
          'op_exone' => $data['op_exone'],
          'rpta_sunat' => $data['rpta_sunat'],
          'estado' => $data['estado'],
          'codigo_usuario ' => $data['codigo_usuario '],
          'codigo_usuario_sys' => $data['codigo_usuario_sys'],
        ];

        DB::table('cpe_gastos')
          ->where('iddoc_cpe', $iddoc_cpe)
          ->update($gastos);
      }
}
