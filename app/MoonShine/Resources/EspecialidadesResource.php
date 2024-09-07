<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidades;
use App\Models\Medico;
use Illuminate\Support\Facades\Request;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Text;
use MoonShine\Metrics\ValueMetric;

/**
 * @extends ModelResource<Especialidades>
 */
class EspecialidadesResource extends ModelResource
{
    protected string $model = Especialidades::class;

    protected string $title = 'Especialidades';
     // habilitamos modal formulario
     protected bool $createInModal = true;
     protected bool $editInModal =true;
     protected bool $detailModal = false;
     protected bool $withPolicy = true; 
    
     //reedireccionar depues de guardar
    public function redirectAfterSave(): string
    {
        $referer = Request::header('referer');
        return $referer ?: '/';
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Nombre de la especialidad', 'name'),
                Text::make('Descripcion', 'descripcion'),
                
            ]),
        ];
    }

    /**
     * @param Especialidades $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }

    // mostrar tarjetas

    public function metrics(): array
    {
        
        $totalespecialidades = Especialidades::count();


        return [
            Grid::make([
                

                Column::make([
                    ValueMetric::make('Total de especialidades')
                ->value($totalespecialidades)
                ->icon('heroicons.outline.users'),
                ])
                ->withAttributes([
                    'style'=>'background-color: #4c1d95'
                ])
                ->columnSpan(6),
                
            ])
        ];
    }
}
