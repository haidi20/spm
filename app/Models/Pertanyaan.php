<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';

    public function jawaban(){
        return $this->hasOne('App\Models\Jawaban', 'pertanyaan_id');
    }

    public function getJawabanKunciAttribute()
    {
        if($this->jawaban){
            return $this->jawaban->id;
        }
    }

    // scope
    public function scopeKondisi($query){
        if (request('tab')) {
            $query->where('penyedia_id',request('tab'));
        }
    }

    public function scopeKondisiJawaban($query){
        $query->with(array('jawaban' => function($jawaban){
            $jawaban->where('sekolah_id',request('sekolah'));
        }));
    }
}
