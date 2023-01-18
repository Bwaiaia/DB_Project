<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Navbar;
  
class NavbarSeeder extends Seeder
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
                'name' => 'Home',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Island',
                'route' => 'island.index',
                'ordering' => 2,
            ],
            [
                'name' => 'Village',
                'route' => 'village.index',
                'ordering' => 3,
            ],
            [
                'name' => 'Training Detail',
                'route' => 'training.index',
                'ordering' => 3,
            ],
            [
                'name' => 'Training Type',
                'route' => 'training_type.index',
                'ordering' => 5,
            ]
            ,
            [
                'name' => 'Employees',
                'route' => 'employee.index',
                'ordering' => 5,
            ]
,
            [
                'name' => 'Report',
                'route' => 'report.repo',
                'ordering' => 6,
            ]
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}