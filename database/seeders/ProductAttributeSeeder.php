<?php
namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    public function run()
    {
        ProductAttribute::factory(150)->create();
    }
}
