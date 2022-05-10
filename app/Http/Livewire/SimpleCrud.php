<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SimpleCrud extends Component
{
    public $posts = [];
    public $title;
    public $content;
    public function mount(){
        $this->posts = Post::all()->toArray();
    }
    public function render()
    {
        $posts = $this->posts;
        return view('livewire.simple-crud',compact('posts'));
    }
    public function store(){
        $this->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
        $post = new Post();
        $post->title = $this->title;
        $post->content = $this->content;
        $post->save();
        $this->posts = Post::all()->toArray();
        $this->title = "";
        $this->content = "";
        session()->flash('success','Post successfully Added.');
    }
    public function updatepost($index){
        $data = $this->posts[$index] ?? null;
        $this->validate([
            'posts.*.title'=>'required',
            'posts.*.content'=>'required'
        ]);
        if(!is_null($data)){
            $post = Post::find($data['id']);
            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->save();
            session()->flash('success','Post successfully Updated.');
        }
    }
    public function delete($index){
        $post = $this->posts[$index] ?? null;
        if(!is_null($post)){
            Post::find($post['id'])->delete();
            $this->posts = Post::all()->toArray();
            session()->flash('success','Post successfully Deleted.');
        }
    }
}
