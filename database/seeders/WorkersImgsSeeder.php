<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkersImgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers_imgs')->insert([
            [
                'worker_id' => '1',
                'img' => 'about/workers/wBsP5ha0BfEe74QskSSGvc20pdYUf0C9j9t5wX14.jpg',
            ],
            [
                'worker_id' => '2',
                'img' => 'about/workers/9XrkvuT2uE8VSFVoPylE6wZmzFJrRlbOQACQ7PYQ.jpg',
            ],
            [
                'worker_id' => '3',
                'img' => 'about/workers/4zNUMPtHRCgcHupP5Du0kMbVXt9OqMAuHbn5ZSw9.jpg',
            ],
            [
                'worker_id' => '4',
                'img' => 'about/workers/uEM60ACq8EmGTgBUoh2H94pGD0x6qZgqr8ysDurV.jpg',
            ],
            [
                'worker_id' => '6',
                'img' => 'about/workers/V7waJaChmpULC3aqIhNExwZrDjRPh7RGMzthxPt2.jpg',
            ],
            [
                'worker_id' => '7',
                'img' => 'about/workers/7jGEaeCrMZaWqoxtYPaEamTeNwU1Gm52ga4cnmiM.jpg',
            ],
            [
                'worker_id' => '8',
                'img' => 'about/workers/Us1xZ8mz31z9u9RRM42SZbBVZMrLdX9dbHGOuS8Q.jpg',
            ],
        ]);
    }
}
