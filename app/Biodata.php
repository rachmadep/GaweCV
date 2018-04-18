<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Pendidikan;
use App\Pengalaman;

class Biodata extends Model
{
  // Digunakan untuk menggunakan soft delete secara default saat menghapus data
  use SoftDeletes;

  protected $fillable = [
      'user_id', 'nama', 'foto', 'telepon', 'website', 'alamat', 'tempat_lahir', 'tanggal_lahir'
  ];
  protected $dates = ['deleted_at'];

  public function user()
  {
      return $this->hasMany(User::class, 'id', 'user_id');
  }

  public function pendidikan()
  {
      return $this->hasMany(Pendidikan::class, 'biodata_id', 'id');
  }

  public function Pengalaman()
  {
      return $this->hasMany(Pengalaman::class, 'biodata_id', 'id');
  }
}
