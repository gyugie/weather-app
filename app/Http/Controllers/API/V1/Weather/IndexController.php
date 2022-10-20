<?php

namespace App\Http\Controllers\API\V1\Weather;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $query = City::query();

        if($request->get('city')) {
            $query->where('name', 'LIKE', "%".$request->get('city')."%");
        }

        $weathers = collect($query->get())->map(function ($city) {
            return [
                'city' => $city->name,
                'timezone' => $city->timezone,
                'weather' => [
                    'main' => $city->weather->main,
                    'description' => $city->weather->description,
                ],
                'main' => [
                    'pressure' => $city->main->pressure,
                    'humidity' => $city->main->humidity,
                ],
                'wind' => [
                    'speed' => $city->wind->speed,
                    'deg' => $city->wind->deg,
                ],
                'coord' => [
                    'lon' => $city->coord->lon,
                    'lat' => $city->coord->lat
                ]
            ];
        });

        return response()->json([
            'status' => true,
            'data' => $weathers
        ]);
    }
}
