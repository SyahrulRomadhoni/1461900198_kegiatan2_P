<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
class MahasiswaSeeder extends Seeder
{
/**
* Run the database seeds.
**
@return void
*/
public function run()
{
$mhs1 = new buku;
$mhs1->judul = "habis gelap terbitlah terang";
$mhs1->nama_pencipta = "Ra Kartini";
$mhs1->save();
$mhs2 = new buku;
$mhs2->nbi = "harry potter";
$mhs2->nama_mhs = "JK Rowling";
$mhs2->save();
}
}