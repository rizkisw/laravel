<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post as PostModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class Post extends Component
{
    use WithFileUploads;
    public $user, $content, $image;
    public function render()
    {
        $posts = PostModel::orderBy('created_at','DESC')->get();
        return view('livewire.post',[
            'posts'=>$posts
        ]);
    }

    public function previewImage(){
        $this->validate([
            'image'=>'image|max:2048'
        ]);
    }

    public function store(){
        $this->validate([
            'content'=>'nullable',
            'image'=>'image|max:2048|required',
        ]);

        $imageName =md5($this->image.microtime().'.'.$this->image->extension());

            Storage::putFileAs(
                'public/images',
                $this->image,
                $imageName
            );
        PostModel::create([
            'user_id'=>Auth::id(),
            'content'=>$this->content,  
            'image'=>$imageName
        ]);

        $this->content="";
        $this->image="";
        $this->emit('postcreated'); 
        session()->flash('message','Post Created ');
    }

}
