<?php

namespace App\Http\Livewire\Chat;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chatlist extends Component
{
    public function render()
    {
        return view('livewire.chat.chatlist');
    }
}
