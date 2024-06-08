<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MahasiswaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_tambah()
    {
        // Jurusan::create([
        //     'nama_jurusan' => 'Ekonomi',
        // ]);

        Mahasiswa::create([
            'nama' => 'Dadang',
            'alamat' => 'Matali',
            'jurusan_id' => 2
        ]);
       
    }
}
