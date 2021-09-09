<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Siswa extends Model
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'asal_sekolah',
        'nik',
        'nama_siswa',
        'foto_siswa',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'agama',
        'alamat_rumah',
        'kelurahan',
        'kecamatan',
        'nomor_telepon',
        'nomor_hp',
        'email',
        'nama_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nomor_telepon_ayah',
        'nama_ibu',
        'tanggal_lahir_ibur',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nomor_telepon_ibu',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'tanggal_lahir',
        'tanggal_lahir_ayah',
        'tanggal_lahir_ibu',
    ];

    /**
     * Search query in multiple whereOr
     */
    public static function search($query)
    {
        return empty($query)
            ? static::query()
            : static::where('name', 'like', '%' . $query . '%');
    }
}
