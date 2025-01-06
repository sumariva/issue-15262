<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TimePicker;
use Filament\Pages\Page;

class ExamplePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.example-page';

    public function getFormSchema() : array
    {
        return [
            Section::make(__('Date'))
                ->columnSpan(1)
                ->schema([
                    DatePicker::make('date')
                        ->label(__('Date'))
                        ->default(now())
                        ->required(),
                    TimePicker::make('time')
                        ->label(__('Time'))
                        ->seconds(false)
                        ->displayFormat('H:i')
                        ->default(now())
                        ->required(),
                ]),
        ];
    }
}
