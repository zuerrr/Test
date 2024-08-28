<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProductAttributeSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
