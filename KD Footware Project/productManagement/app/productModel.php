<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table = 'product_models';

    protected $fillable = [
        'Material1',
        'Mate1Qty',
        'Material2',
        'Mate2Qty',
        'Material3',
        'Mate3Qty',
        'Material4',
        'Mate4Qty',
        'Machine1',
        'Machi1Time',
        'Machine2',
        'Machi2Time',
        'Machine3',
        'Machi3Time',
        'Machine4',
        'Machi4Time'
    ];

    public function RawMaterials()
    {
        return $this->hasMany('App\RawMaterial');
    }

    public function Machines()
    {
        return $this->hasMany('App\machine');
    }

    public function order()
    {
        return $this->hasOne('App\Orders');
    }

    public static function getRawMaterialQty($raw_material_name){

        $raw_material_qty = '-';
        $raw_material = RawMaterial::where('name',$raw_material_name)->first();
        if(is_object($raw_material)){
            $raw_material_qty = $raw_material->qty;
        }
        return $raw_material_qty;
    }

    
}
