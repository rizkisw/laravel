<div>
<input type="hidden" wire:model="postId">
<textarea wire:model="content" class="p-2" rows="4"></textarea>
@error('content')<small class="text-danger">{{$message}}</small>@enderror
<button type="submit" class="btn btn-primaty">Update</button>
</form>
</div>
