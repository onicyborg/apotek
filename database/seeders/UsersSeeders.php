<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kasir',
                'email' => 'kasir@example.com',
                'password' => Hash::make('kasir'),
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $products = [
            [
                'nama_obat' => 'Paracetamol',
                'harga_jual' => 5000.00,
                'harga_beli' => 3000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat untuk meredakan demam dan nyeri ringan.',
                'quantity' => 100,
                'img' => ''
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'harga_jual' => 15000.00,
                'harga_beli' => 10000.00,
                'type' => 'Kapsul',
                'deskripsi' => 'Antibiotik untuk infeksi bakteri.',
                'quantity' => 50,
                'img' => ''
            ],
            [
                'nama_obat' => 'Ibuprofen',
                'harga_jual' => 7000.00,
                'harga_beli' => 4000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat antiinflamasi nonsteroid untuk meredakan nyeri.',
                'quantity' => 80,
                'img' => ''
            ],
            [
                'nama_obat' => 'Loratadine',
                'harga_jual' => 12000.00,
                'harga_beli' => 8000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Antihistamin untuk alergi.',
                'quantity' => 60,
                'img' => ''
            ],
            [
                'nama_obat' => 'Cetirizine',
                'harga_jual' => 10000.00,
                'harga_beli' => 7000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat untuk mengatasi alergi.',
                'quantity' => 90,
                'img' => ''
            ],
            [
                'nama_obat' => 'Salbutamol',
                'harga_jual' => 18000.00,
                'harga_beli' => 12000.00,
                'type' => 'Inhaler',
                'deskripsi' => 'Bronkodilator untuk asma.',
                'quantity' => 40,
                'img' => ''
            ],
            [
                'nama_obat' => 'Dexamethasone',
                'harga_jual' => 20000.00,
                'harga_beli' => 15000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Kortikosteroid untuk mengurangi inflamasi.',
                'quantity' => 30,
                'img' => ''
            ],
            [
                'nama_obat' => 'Omeprazole',
                'harga_jual' => 25000.00,
                'harga_beli' => 18000.00,
                'type' => 'Kapsul',
                'deskripsi' => 'Obat untuk mengurangi asam lambung.',
                'quantity' => 70,
                'img' => ''
            ],
            [
                'nama_obat' => 'Metformin',
                'harga_jual' => 15000.00,
                'harga_beli' => 10000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat untuk diabetes tipe 2.',
                'quantity' => 50,
                'img' => ''
            ],
            [
                'nama_obat' => 'Atorvastatin',
                'harga_jual' => 30000.00,
                'harga_beli' => 20000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat untuk menurunkan kolesterol.',
                'quantity' => 40,
                'img' => ''
            ],
            [
                'nama_obat' => 'Hydrocortisone',
                'harga_jual' => 5000.00,
                'harga_beli' => 3000.00,
                'type' => 'Krim',
                'deskripsi' => 'Obat untuk mengatasi inflamasi kulit.',
                'quantity' => 20,
                'img' => ''
            ],
            [
                'nama_obat' => 'Miconazole',
                'harga_jual' => 10000.00,
                'harga_beli' => 7000.00,
                'type' => 'Krim',
                'deskripsi' => 'Antijamur untuk infeksi kulit.',
                'quantity' => 50,
                'img' => ''
            ],
            [
                'nama_obat' => 'Cefadroxil',
                'harga_jual' => 20000.00,
                'harga_beli' => 15000.00,
                'type' => 'Sirup',
                'deskripsi' => 'Antibiotik untuk infeksi bakteri.',
                'quantity' => 30,
                'img' => ''
            ],
            [
                'nama_obat' => 'Cetirizine',
                'harga_jual' => 15000.00,
                'harga_beli' => 10000.00,
                'type' => 'Sirup',
                'deskripsi' => 'Obat untuk mengatasi alergi dalam bentuk sirup.',
                'quantity' => 60,
                'img' => ''
            ],
            [
                'nama_obat' => 'Ibuprofen',
                'harga_jual' => 12000.00,
                'harga_beli' => 8000.00,
                'type' => 'Suspensi',
                'deskripsi' => 'Obat untuk meredakan nyeri dalam bentuk suspensi.',
                'quantity' => 80,
                'img' => ''
            ],
            [
                'nama_obat' => 'Betadine',
                'harga_jual' => 5000.00,
                'harga_beli' => 3000.00,
                'type' => 'Gel',
                'deskripsi' => 'Antiseptik untuk luka.',
                'quantity' => 100,
                'img' => ''
            ],
            [
                'nama_obat' => 'Chlorpheniramine',
                'harga_jual' => 8000.00,
                'harga_beli' => 5000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Antihistamin untuk alergi.',
                'quantity' => 90,
                'img' => ''
            ],
            [
                'nama_obat' => 'Acetaminophen',
                'harga_jual' => 6000.00,
                'harga_beli' => 4000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat untuk mengurangi demam dan nyeri.',
                'quantity' => 100,
                'img' => ''
            ],
            [
                'nama_obat' => 'Ranitidine',
                'harga_jual' => 10000.00,
                'harga_beli' => 7000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat untuk mengurangi asam lambung.',
                'quantity' => 60,
                'img' => ''
            ],
            [
                'nama_obat' => 'Diazepam',
                'harga_jual' => 25000.00,
                'harga_beli' => 18000.00,
                'type' => 'Tablet',
                'deskripsi' => 'Obat untuk mengatasi kecemasan dan kejang.',
                'quantity' => 40,
                'img' => ''
            ]
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'nama_obat' => $product['nama_obat'],
                'harga_jual' => $product['harga_jual'],
                'harga_beli' => $product['harga_beli'],
                'type' => $product['type'],
                'deskripsi' => $product['deskripsi'],
                'quantity' => $product['quantity'],
                'img' => $product['img'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
