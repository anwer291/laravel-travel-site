<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;
use Carbon\Carbon;

class FlightSeeder extends Seeder
{
    public function run(): void
    {
        $airlines = [
            ['Qatar Airways', 'https://1000logos.net/wp-content/uploads/2021/04/Qatar-Airways-logo.png'],
            ['Emirates', 'https://1000logos.net/wp-content/uploads/2020/03/Emirates-Logo.png'],
            ['Turkish Airlines', 'https://1000logos.net/wp-content/uploads/2020/03/Turkish-Airlines-logo.png'],
            ['British Airways', 'https://1000logos.net/wp-content/uploads/2020/03/British-Airways-logo.png'],
            ['Lufthansa', 'https://1000logos.net/wp-content/uploads/2020/04/Lufthansa-logo.png'],
            ['KLM Royal Dutch Airlines', 'https://1000logos.net/wp-content/uploads/2020/03/KLM-Logo.png'],
            ['Air France', 'https://1000logos.net/wp-content/uploads/2020/03/Air-France-logo.png'],
            ['Etihad Airways', 'https://1000logos.net/wp-content/uploads/2020/03/Etihad-Airways-logo.png'],
            ['Saudi Arabian Airlines', 'https://logowik.com/content/uploads/images/saudia-saudi-arabian-airlines7182.jpg'],
            ['Delta Airlines', 'https://1000logos.net/wp-content/uploads/2021/05/Delta-Air-Lines-logo.png'],
            ['American Airlines', 'https://1000logos.net/wp-content/uploads/2021/05/American-Airlines-logo.png'],
            ['United Airlines', 'https://1000logos.net/wp-content/uploads/2020/05/United-Airlines-logo.png'],
            ['Singapore Airlines', 'https://1000logos.net/wp-content/uploads/2020/05/Singapore-Airlines-logo.png'],
            ['Cathay Pacific', 'https://1000logos.net/wp-content/uploads/2021/05/Cathay-Pacific-logo.png'],
            ['ANA', 'https://1000logos.net/wp-content/uploads/2021/05/All-Nippon-Airways-logo.png'],
        ];

        $uk_airports = [
            ['LHR', 'Heathrow Airport (London)'],
            ['LGW', 'Gatwick Airport (London)'],
            ['STN', 'Stansted Airport (London)'],
            ['LTN', 'Luton Airport (London)'],
            ['MAN', 'Manchester Airport'],
            ['BHX', 'Birmingham Airport'],
            ['EDI', 'Edinburgh Airport'],
            ['GLA', 'Glasgow Airport'],
            ['BRS', 'Bristol Airport'],
            ['NCL', 'Newcastle Airport'],
        ];

        $destinations = [
            ['JFK', 'John F. Kennedy International Airport (New York)'],
            ['LAX', 'Los Angeles International Airport'],
            ['DXB', 'Dubai International Airport'],
            ['HND', 'Tokyo Haneda Airport'],
            ['CDG', 'Paris Charles de Gaulle Airport'],
            ['FRA', 'Frankfurt Airport'],
            ['AMS', 'Amsterdam Schiphol Airport'],
            ['IST', 'Istanbul Airport'],
            ['SIN', 'Singapore Changi Airport'],
            ['SYD', 'Sydney Kingsford Smith Airport'],
            ['DEL', 'Indira Gandhi International Airport (Delhi)'],
            ['BOM', 'Chhatrapati Shivaji Maharaj International Airport (Mumbai)'],
            ['PEK', 'Beijing Capital International Airport'],
            ['CPT', 'Cape Town International Airport'],
            ['YYZ', 'Toronto Pearson International Airport'],
        ];

        $startDate = Carbon::create(2025, 6, 1);
        $endDate = Carbon::create(2025, 6, 30); // You can increase to full year if you want

        $flights = [];

        for ($date = $startDate; $date <= $endDate; $date->addDay()) {
            foreach ($uk_airports as $uk) {
                foreach ($destinations as $dest) {
                    for ($i = 0; $i < 2; $i++) {
                        $airline = $airlines[array_rand($airlines)];
                        $flights[] = [
                            'airline' => $airline[0],
                            'departure_airport_code' => $uk[0],
                            'departure_airport_name' => $uk[1],
                            'arrival_airport_code' => $dest[0],
                            'arrival_airport_name' => $dest[1],
                            'price' => rand(150, 1500),
                            'departure_date' => $date->toDateString(),
                            'arrival_date' => $date->copy()->addDays(rand(1, 3))->toDateString(),
                            'class' => ['economy', 'business', 'first'][rand(0, 2)],
                            'available_seats' => rand(5, 100),
                            'image' => $airline[1],
                            'passengers' => 1,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
            }
        }

        foreach (array_chunk($flights, 1000) as $chunk) {
            Flight::insert($chunk);
        }
    }
}
