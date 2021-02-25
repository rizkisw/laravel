<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Livewire\Component;

class EditPost extends Component
{
    use AuthorizesRequests;

    public $postId;
    public $post;
    public $content;


    public function mount(Post $post)
    {
        $post = Post::find($this->postId);
        if($post){
            $this->postId = $post->id;
            $this->content = $post->content;

        }
    }
    public function render()
    {   
        return view('livewire.edit-post');
    }
    public function Update()
    {
        $post =Post::find($this->postId);
        if($post){
            $post->update([
            'content' =>$this->content
            ]);
        }
    }
}

