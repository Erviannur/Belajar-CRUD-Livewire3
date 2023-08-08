<?php

namespace App\Livewire;

use Livewire\Component;

class LifecycleHooks extends Component
{
    public $hobi;
    public $warna_kesukaan;

    public $proses = [];

    public function mount()
    {
        $this->hobi = "melukis";
        $this->warna_kesukaan = "hijau";
        $this->proses[] = 'sedang di mount';
    }

    public function hydrate()
    {
        $this->proses[] = 'sedang di hydrate';
    }

    public function updating($name, $value)
    {
        $this->proses[] = "sedang di updating => $name & $value";
    }

    public function updated($name, $value)
    {
        $this->proses[] = "sedang di update => $name & $value";
    }

    public function updatingHobi($name, $value)
    {
        $this->proses[] = "sedang di updatingHobi => $name & $value";
    }

    public function updatedHobi($name, $value)
    {
        $this->proses[] = "sedang di updatedHobi => $name & $value";
    }

    public function updatingWarnaKesukaan($name, $value)
    {
        $this->proses[] = "sedang di updatingWarnaKesukaan => $name & $value";
    }

    public function updatedWarnaKesukaan($name, $value)
    {
        $this->proses[] = "sedang di updatedWarnaKesukaan => $name & $value";
    }

    public function render()
    {
        $this->proses[] = 'sedang di render';
        $this->proses[] = '---';
        return view('livewire.lifecycle-hooks')->extends('layout.app2')->section('main-content');
    }
}
