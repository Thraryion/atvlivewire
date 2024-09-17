<?php

namespace App\Livewire;

use Livewire\Component;

class Anotacoes extends Component
{
    public $newNote = '';
    public $notes = [];

    public function addNote()
    {
        if (!empty($this->newNote)) {
            $this->notes[] = $this->newNote;
            $this->newNote = '';
        }
    }

    public function clearNotes()
    {
        $this->notes = [];
    }

    public function saveNotes()
    {
        session()->flash('message', 'Anotações salvas com sucesso!');
    }

    public function render()
    {
        return view('livewire.anotacoes');
    }
}
