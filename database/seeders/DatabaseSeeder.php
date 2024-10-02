<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            [
            'nama'=>'irwansyah',
            'umur'=>14,
            'ttl'=>Carbon::parse('2007-02-04'),
            'alamat'=>'jl. raya'
        ],[
            'nama'=>'bintang',
            'umur'=>14,
            'ttl'=>Carbon::parse('2008-02-04'),
            'alamat'=>'jl. raya'
        ]
        ]);
    }
}
