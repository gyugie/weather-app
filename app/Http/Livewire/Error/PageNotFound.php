<?php

namespace App\Http\Livewire\Error;

use Livewire\Component;

class PageNotFound extends Component
{
    public function render()
    {
        return view('errors.404')
            ->extends('layouts.single')
            ->section('content');
    }
}
