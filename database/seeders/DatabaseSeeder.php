<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create freelancer users
        $freelancers = [
            [
                'name' => 'testuser',
                'email' => 'testuser@gmail.com',
                'password' => Hash::make('password123'),
                'role' => 'freelancer',
            ],
            [
                'name' => 'Kim Somet',
                'email' => 'kim.somet@example.com',
                'password' => Hash::make('password123'),
                'role' => 'freelancer',
            ],
            [
                'name' => 'Srey Vannarith',
                'email' => 'srey.vannarith@example.com',
                'password' => Hash::make('password123'),
                'role' => 'freelancer',
            ],
            [
                'name' => 'Cheu Mengheang',
                'email' => 'cheu.mengheang@example.com',
                'password' => Hash::make('password123'),
                'role' => 'freelancer',
            ],
            [
                'name' => 'My Thong',
                'email' => 'my.thong@example.com',
                'password' => Hash::make('password123'),
                'role' => 'freelancer',
            ],
        ];

        foreach ($freelancers as $freelancer) {
            User::create($freelancer);
        }

        // Fetch freelancer users
        $users = User::where('role', 'freelancer')->get();

        // Product list
        $products = [
            ['name' => 'Logo Design', 'description' => 'Professional logo design for your brand', 'price' => 50.00, 'image' => 'assets/img/photo_2025-12-02_01-04-07.jpg'],
            ['name' => 'Website Design', 'description' => 'Responsive web design', 'price' => 200.00,  'image' => 'assets/img/photo_2025-12-02_03-16-15.jpg'],
            ['name' => 'Mobile App UI/UX', 'description' => 'UI/UX design for mobile apps', 'price' => 150.00, 'image' => 'assets/img/114e4f2e9bc8c445213e504231ffb79ca627d84f-1440x835.png'],
            ['name' => 'Video Editing', 'description' => 'High-quality video editing', 'price' => 100.00, 'image' => 'assets/img/photo_2025-12-02_03-17-39.jpg'],
            ['name' => 'Photo Retouching', 'description' => 'Professional photo editing and retouch', 'price' => 30.00, 'image' => 'assets/img/photo_2025-12-02_03-18-27.jpg'],
            ['name' => 'Social Media Content', 'description' => 'Custom content for social media', 'price' => 40.00, 'image' => 'assets/img/photo_2025-12-02_01-01-12.jpg'],
            ['name' => 'SEO Optimization', 'description' => 'Improve website SEO', 'price' => 80.00, 'image' => 'assets/img/1603954182-seo-article-header.webp'],
            ['name' => 'Illustration', 'description' => 'Custom illustrations and artwork', 'price' => 120.00, 'image' => 'assets/img/image-88-e1692385167766.webp'],
            ['name' => 'Animation', 'description' => '2D/3D animation services', 'price' => 250.00, 'image' => 'assets/img/Publicity-still-scene-The-Wild-Robot-movie.webp'],
            ['name' => 'Content Writing', 'description' => 'High-quality content writing', 'price' => 60.00, 'image' => 'assets/img/what-is-content-writing.jpg'],
        ];

        // Assign products to random freelancers
        foreach ($products as $product) {
            Product::create([
                'user_id' => $users->random()->id,
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'image' => $product['image'], // <-- FIXED
            ]);
        }
    }
}
