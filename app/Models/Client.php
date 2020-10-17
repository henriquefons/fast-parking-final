<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['board', 'cpf', 'name', 'type_vehicle', 'occupation'];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

}
