<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $post;

    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.single-post');
    }
}
