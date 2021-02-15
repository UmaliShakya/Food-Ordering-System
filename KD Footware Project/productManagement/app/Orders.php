<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'ODate',
        'CustomerID',
        'Qty',
        'ModelID',
        'Amount',
        'Total',
        'Status',
        'Action',
    ];

    public function productModel()
    {
        return $this->hasOne('App\productModel', 'ModelID');
    }

    public static function getOrderQtyFromProductModelID($ModelID){

        $order = Orders::where('ModelID',$ModelID)->first();
        $qty = $order->Qty;
        return $qty;

    }
    
}
