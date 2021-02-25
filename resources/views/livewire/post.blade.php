<div class="form-group container w-75">
<form wire:submit.prevent="store">
<div>
        @if (session()->has('message'))
          <div class="p3 text-xl text-success text-right">
                 {{ session('message') }}
             </div>
         @endif
      </div>

<div class="card">
  <div class="card-body">
    <p class="h4">Post</p>
  </div>
    <textarea wire:model="content" class="p-2" rows="4" placeholder="Post Something..."></textarea>
    @error('content')<small class="text-danger">{{$message}}</small>@enderror
    <div class="custom-file">
     <input wire:model="image" type="file" class="custom-file-input" id="customFile">
     <label for="customFile" class="custom-file-label text-end">Upload Image</label>
     </div>
     @if($image)
        <label class="mt-2">Image Preview:</label>
        <img src="{{$image->temporaryUrl()}}" class="img-fluid img-thumbnail" alt="">
     @endif
     @error('image')<small class="text-danger">{{$message}}</small>@enderror
     <button  wire:click="$emit('postcreated')"
      type="submit" class="btn btn-primary btn-block">Post</button>
     </form>
</div>  
</div>
