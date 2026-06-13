<?php

namespace Database\Seeders;

use App\Models\events;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventRows = [
            [
                'event_date' => '2026-05-20',
                'title' => 'BEHIND THE SCENES AT CHELSEA',
                'details' => 'by Colin Jones',
            ],
            [
                'event_date' => '2026-06-17',
                'title' => 'PLANT AND SEED SWAP SALE',
                'details' => '',
            ],
            [
                'event_date' => '2026-07-15',
                'title' => "LET'S TALK GARDENING",
                'details' => 'by Jean Griffin',
            ],
            [
                'event_date' => '2026-08-01',
                'title' => 'SUMMER SHOW',
                'details' => '2.00pm - All Welcome',
            ],
        ];

        foreach ($eventRows as $eventRow) {
            events::updateOrCreate(
                ['event_date' => $eventRow['event_date'], 'title' => $eventRow['title']],
                ['details' => $eventRow['details']]
            );
        }
    }
}
