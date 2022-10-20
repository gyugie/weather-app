<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeatherResource\Pages;
use App\Filament\Resources\WeatherResource\RelationManagers;
use App\Models\City;
use App\Models\Weather;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class WeatherResource extends Resource
{
    protected static ?string $model = City::class;

    protected static ?string $navigationLabel = 'Weather';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->formatStateUsing(function ($record) {
                        $main = $record->weather->main;
                        $description = $record->weather->description;
                        $wind = $record->wind;
                        $coord = $record->coord;
                        $pressure = $record->main->pressure;
                        $humidity = $record->main->humidity;
                        return new HtmlString("
                            <div class='flex flex-col'>
                                <div class=''>
                                    <span class='font-semibold'>$record->name</span> - <span class='text-xs'>$main ($description) </span>
                                </div>
                                <div class='text-sm'>
                                   <span>Longitude: $coord->lon Latitude: $coord->lat </span>
                                </div>
                                <div class='text-sm'>
                                   <span>Wind Speed: $wind->speed Deg: $wind->deg </span>
                                </div>
                                <div class='text-sm'>
                                   <span>Timezone: $record->timezone </span>
                                </div>
                                <div class='text-sm'>
                                   <span>Pressure: $pressure </span>
                                </div>
                                <div class='text-sm'>
                                   <span>Humadity: $humidity </span>
                                </div>
                            </div>

                        ");
                    })->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWeather::route('/'),
            'create' => Pages\CreateWeather::route('/create'),
            'edit' => Pages\EditWeather::route('/{record}/edit'),
        ];
    }
}
