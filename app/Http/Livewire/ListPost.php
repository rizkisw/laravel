<?php

namespace App\Http\Livewire;
use App\Http\Livewire\EditPost;
use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
class ListPost extends Component

{


    protected $listeners= [
        'postcreated' => '$refresh'
    ];
    public function render()
    {
        return view('livewire.list-post',[
            'posts'=>Post::latest()->get()
        ]);
    }
}
