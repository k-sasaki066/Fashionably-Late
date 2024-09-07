<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use App\Models\Category;


class Modal extends Component
{
    public $showModal = false;
    public $detail;

    public function mount($contact_id)
    {
        $this->detail = Contact::with('category')->find($contact_id);
    }

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
