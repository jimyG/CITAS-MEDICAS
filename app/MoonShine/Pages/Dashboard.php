<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Especialidades;
use App\Models\Medico;
use MoonShine\Pages\Page;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\ValueMetric;

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Dashboard';
    }

    /**
     * @return list<MoonShineComponent>
     */
    public function components(): array
	{

        $totalespecialidades = Especialidades::count();
		$totalmedicos  = Medico::count();


        return [
            Grid::make([
                ValueMetric::make('Total de medicos')
                ->value($totalmedicos)
                ->icon('heroicons.outline.eye')
                ->columnSpan(6),

                ValueMetric::make('Total de especialidades')
                ->value($totalespecialidades)
                ->icon('heroicons.outline.users')
                ->columnSpan(6),
            ])
        ];
	}
}
