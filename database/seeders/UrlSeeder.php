<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Url;
  
class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Training Attendance',
                'url' => 'report.index',
                'ordering' => 1,
            ],
            // [
            //     'name' => 'Island',
            //     'route' => 'island.index',
            //     'ordering' => 2,
            // ],
            // [
            //     'name' => 'Village',
            //     'route' => 'village.index',
            //     'ordering' => 3,
            // ],
            // [
            //     'name' => 'Training Detail',
            //     'route' => 'training.index',
            //     'ordering' => 4,
            // ],
            // [
            //     'name' => 'Training Type',
            //     'route' => 'training_type.index',
            //     'ordering' => 5,
            // ],

            // [
            //     'name' => 'Report',
            //     'route' => 'report.repo',
            //     'ordering' => 6,
            // ],
            // [
            //     'name' => 'Chart',
            //     'route' => 'chart.index',
            //     'ordering' => 7,
            // ]
        ];
  
        foreach ($links as $key => $url) {
            Url::create($url);
        }
    }
}