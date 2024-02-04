<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('train')->insert([
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '08:00:00',
                'arrival_time' => '12:30:00',
                'train_code' => 'IT123',
                'carriages_number' => 8,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'Eurostar',
                'departure_station' => 'London Kings Cross',
                'arrival_station' => 'Edinburgh Waverley',
                'departure_time' => '10:15:00',
                'arrival_time' => '15:45:00',
                'train_code' => 'UK456',
                'carriages_number' => 6,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'SNCF',
                'departure_station' => 'Paris Gare de Lyon',
                'arrival_station' => 'Marseille Saint-Charles',
                'departure_time' => '09:30:00',
                'arrival_time' => '13:15:00',
                'train_code' => 'FR789',
                'carriages_number' => 7,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'Deutsche Bahn',
                'departure_station' => 'Berlin Hauptbahnhof',
                'arrival_station' => 'Hamburg Hauptbahnhof',
                'departure_time' => '11:45:00',
                'arrival_time' => '15:30:00',
                'train_code' => 'DE101',
                'carriages_number' => 9,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'Renfe',
                'departure_station' => 'Madrid Atocha',
                'arrival_station' => 'Barcelona Sants',
                'departure_time' => '10:00:00',
                'arrival_time' => '14:45:00',
                'train_code' => 'ES202',
                'carriages_number' => 8,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'SNCF',
                'departure_station' => 'Lille Flandres',
                'arrival_station' => 'Strasbourg',
                'departure_time' => '09:45:00',
                'arrival_time' => '13:30:00',
                'train_code' => 'FR456',
                'carriages_number' => 6,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'NS International',
                'departure_station' => 'Amsterdam Centraal',
                'arrival_station' => 'Brussels Midi',
                'departure_time' => '11:30:00',
                'arrival_time' => '14:15:00',
                'train_code' => 'NL789',
                'carriages_number' => 7,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'TGV Lyria',
                'departure_station' => 'Geneva',
                'arrival_station' => 'Lyon Part-Dieu',
                'departure_time' => '10:20:00',
                'arrival_time' => '13:45:00',
                'train_code' => 'FR101',
                'carriages_number' => 8,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Rome Tiburtina',
                'arrival_station' => 'Naples Centrale',
                'departure_time' => '12:15:00',
                'arrival_time' => '15:30:00',
                'train_code' => 'IT456',
                'carriages_number' => 9,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'RENFE-SNCF',
                'departure_station' => 'Barcelona Sants',
                'arrival_station' => 'Paris Gare de Lyon',
                'departure_time' => '11:00:00',
                'arrival_time' => '15:45:00',
                'train_code' => 'FRES123',
                'carriages_number' => 10,
                'on_time' => true,
                'canceled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
