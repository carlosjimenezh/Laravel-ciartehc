<?php

namespace App\View\Components;

use App\Models\LineasInvestigacion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $lineas_investigacion = LineasInvestigacion::all();
        return view('components.header', [
            'lineas_investigacion' => $lineas_investigacion
        ]);
    }
}
