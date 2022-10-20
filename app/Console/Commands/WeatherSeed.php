<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Coord;
use App\Models\Main;
use App\Models\Weather;
use App\Models\Wind;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class WeatherSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            collect(['bandung','jakarta','bogor','tangerang','bekasi'])
                ->each(function ($city) {
                    $this->info("Seeding For City {$city}");
                    $response = Http::get(
                        "https://api.openweathermap.org/data/2.5/weather?q={$city}&APPID=24d5232eb11183e626f42c5d4b193e88"
                    )->json();

                    $city = City::create([
                        'timezone' => Arr::get($response,'timezone', 0),
                        'city_id' => Arr::get($response,'id', 0),
                        'name' => Arr::get($response,'name', $city),
                        'cod' => Arr::get($response,'cod', ''),
                    ]);

                    Main::create([
                        "city_id" => $city->id,
                        "temp" => Arr::get($response['main'],'temp', 0),
                        "feels_like" => Arr::get($response['main'],'feels_like', 0),
                        "temp_min" => Arr::get($response['main'],'temp_min', 0),
                        "temp_max" => Arr::get($response['main'],'temp_max', 0),
                        "pressure" => Arr::get($response['main'],'pressure', 0),
                        "humidity" => Arr::get($response['main'],'humidity', 0),
                        "sea_level" => Arr::get($response['main'],'sea_level', 0),
                        "grnd_level" => Arr::get($response['main'],'grnd_level', 0),
                    ]);

                    Coord::create([
                        'city_id' => $city->id,
                        'lon' => Arr::get($response['coord'],'lon', 0),
                        'lat' => Arr::get($response['coord'],'lat', 0),
                    ]);

                    Wind::create([
                        'city_id' => $city->id,
                       'speed' => Arr::get($response['wind'],'speed', 0),
                        'deg' => Arr::get($response['wind'],'deg', 0),
                    ]);

                    collect($response['weather'])->each(function ($weather) use($city) {
                        Weather::create([
                            'main' => Arr::get($weather,'main', ''),
                            'description'=> Arr::get($weather,'description', ''),
                            'icon'=> Arr::get($weather,'icon', ''),
                            'weather_id'=> $weather['id'],
                            'city_id'=> $city->id,
                        ]);
                    });
                });

            $this->info("Seeding data completed :)");
        } catch (\Exception $exception) {
            $this->error("Seeding data Error :( ". $exception->getMessage());
        }
    }
}
