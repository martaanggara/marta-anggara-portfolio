<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\ProjectImage;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Merchendise',
                'category' => 'Merch',
                'cover_image' => 'projects/Merch.jpg',
                'gallery' => [
                    'projects/merch/1.jpg',
                    'projects/merch/2.jpg',
                    'projects/merch/3.jpg',
                ],
            ],
            [
                'title' => 'Event Poster Series',
                'category' => 'Graphic Design',
                'cover_image' => 'projects/poster-series.jpg',
                'gallery' => [
                    'projects/poster-series/1.jpg',
                    'projects/poster-series/2.jpg',
                ],
            ],
            [
                'title' => 'Dashboard UI Concept',
                'category' => 'UI Design',
                'cover_image' => 'projects/dashboard-ui.jpg',
                'gallery' => [
                    'projects/dashboard-ui/1.jpg',
                    'projects/dashboard-ui/2.jpg',
                    'projects/dashboard-ui/3.jpg',
                ],
            ],
            [
                'title' => 'Vn.Konveksi',
                'category' => 'Interactive UI',
                'cover_image' => 'projects/vnkonveksi-poster.jpg',
                'gallery' => [
                    'projects/prototype/1.jpg',
                ],
            ],
        ];

        foreach ($projects as $i => $p) {
            $project = Project::updateOrCreate(
                ['slug' => Str::slug($p['title'])],
                [
                    'title' => $p['title'],
                    'category' => $p['category'],
                    'cover_image' => $p['cover_image'],
                    'order' => $i,
                    'description' => 'Deskripsi singkat tentang project ini. Bisa kamu ganti sesuai karya asli kamu.',
                ]
            );

            // Hapus gambar lama biar nggak numpuk duplikat, lalu insert ulang
            $project->images()->delete();
            foreach ($p['gallery'] as $j => $imagePath) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $imagePath,
                    'order' => $j,
                ]);
            }
        }
    }
}