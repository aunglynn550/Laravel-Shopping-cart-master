<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
 
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function saveContact()
    {
        $validatedData = $this->validate();
 
        Contact::create($validatedData);
    }
}