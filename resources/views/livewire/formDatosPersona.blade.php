<div class="row justify-content-center">
    <div class="col-12 col-lg-6">
        <div class="mb-3">
            <label>Tipos</label>
            <select class="form-control select2" data-bs-toggle="select2" wire:model="id_tipo" style="cursor: pointer ">
                <option>Selecionar...</option>
                @foreach ($t as $item)
                   <option value="{{$item->id}}">{{$item->tipo_usuario}}</option>
               @endforeach                         
            </select>
            @error('id_tipo') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" class="form-control" wire:model="nombre" >
            @error('nombre') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-3">
            <label>Apellido</label>
            <input type="text" class="form-control" wire:model="apellido" >
            @error('apellido') <span class="error">{{ $message }}</span> @enderror 
        </div>
        
        <div class="mb-3">
            <label>Telefono</label>
            <input type="text" class="form-control" wire:model="celular">
            @error('celular') <span class="error">{{ $message }}</span> @enderror 
        </div>  
                        
    </div>
    
    <div class="col-12 col-lg-6">
        <div class="mb-3">
            <label>Especialidad</label>
            <select class="form-control select2" data-bs-toggle="select2" wire:model="id_especialidad" style="cursor: pointer ">
                <option>Selecionar...</option>
                @foreach ($e as $item2)
                   <option value="{{$item2->id}}"> {{$item2->especialidad}} </option>
               @endforeach                         
            </select>
            @error('id_especialidad') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-3">
            <label>Cedula</label>
            <input type="text" class="form-control" wire:model="cedula">
            @error('cedula') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div class="mb-3">
            <label>Direccion</label>
            <input type="text" class="form-control" wire:model="direccion">
            @error('direccion') <span class="error">{{ $message }}</span> @enderror 
                                   
        </div>
    </div>
</div>
