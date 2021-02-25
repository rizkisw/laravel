@foreach ($posts as $post)
<div class="card w-75 container mb-3 mt-2">
  <img class="img-fluid pt-3  " src="{{asset ('storage/images/'. $post->image)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$post->user->name}}</h5>
    <p class="card-text text-start">{{$post->content}}</p>
    @if(auth()->user('name') === $post->id)
    <button wire:click="destroy({{$post->id}})" class="btn btn-danger">Delete</button>
    @endif
  </div>
    <p class="text-right">{{$post->created_at->diffForHumans()}}</p>
</div>
@endforeach