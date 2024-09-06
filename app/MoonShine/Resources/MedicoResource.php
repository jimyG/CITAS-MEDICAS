<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Especialidades;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medico;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;

/**
 * @extends ModelResource<Medico>
 */
class MedicoResource extends ModelResource
{
    protected string $model = Medico::class;

    protected string $title = 'Medicos';

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
                Text::make('Nombre del doctor', 'name'),
              //  BelongsTo::make('Especialidad', 'especialidades', 'name'),
                Text::make('Correo electronico', 'email'),
                Text::make('Contaseña', 'password'),
                Text::make('Dui', 'dui'),
                Text::make('Edad', 'edad'),
                Text::make('Direccion', 'address'),
                Text::make('Licencia', 'licencia'),
                Text::make('Telefono', 'phone'),
                
            ]),
        ];
    }

    /**
     * @param Medico $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
