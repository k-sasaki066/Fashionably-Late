<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\Contact;
use App\Model\Category;


class Modal extends Component
{
    public $showModal = false;

    public function render()
    {
        return view('livewire.modal');
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
}
