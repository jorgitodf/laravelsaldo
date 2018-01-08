<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public $timestamps = false;

    public function deposito(float $value): Array
    {
        $this->amount += number_format($value, 2, '.', '');
        $deposito = $this->save();
        
        if ($deposito) {
            return ['success'=>true, 'message'=>'Depósito realizado com Sucesso!'];
        }
        return ['success'=>false, 'message'=>'Depósito não realizado!'];
    }

}
