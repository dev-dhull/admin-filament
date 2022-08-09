<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Employee; 
use App\Models\Country; 

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $uk = Country::where('country_code', 'UK')->withCount('employees')->first();
        $us = Country::where('country_code', 'US')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make($uk->name. ' Employees', $uk->employees_count),
            Card::make($us->name. ' Employees', $us->employees_count),
        ];
    }
}
