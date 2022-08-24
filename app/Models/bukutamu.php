<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukutamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'komentar',
        'waktu',
        'foto',
    ];

    public function BukuTamuKategoris() {
        return $this->hasMany(BukuTamuKategori::class, 'bukutamus_id', 'id');
    }
    public function hasKategoriById($id){
        if($this->BukuTamuKategoris->whereIn('kategoris_id',$id)->first()){
            return true;
        }
        return false;
    }
}
