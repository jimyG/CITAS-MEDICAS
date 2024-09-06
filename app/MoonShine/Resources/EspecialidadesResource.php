<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Especialidades;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Text;

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
}
