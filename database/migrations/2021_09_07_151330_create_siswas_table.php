<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();

            // Data Pribadi
            $table->foreignId('asal_sekolah')->index();
            $table->bigInteger('nik');
            $table->string('nama_siswa');
            $table->string('foto_siswa');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('agama');
            $table->text('alamat_rumah');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('nomor_telepon')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('email')->nullable();
            // End Data Pribadi

            // Data Ayah
            $table->string('nama_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah')->nullable();
            $table->string('nomor_telepon_ayah')->nullable();
            // End Data Ayah

            // Data Ibu
            $table->string('nama_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu')->nullable();
            $table->string('nomor_telepon_ibu')->nullable();
            // End Data Ibu

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
