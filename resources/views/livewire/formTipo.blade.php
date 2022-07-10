<label class="form-label">Tipo</label>
<input type="text" class="form-control" placeholder="" wire:model="tipos">
@error('tipos') <span class="error alert alert-danger">{{ $message }}</span> @enderror
<br>
 @if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif