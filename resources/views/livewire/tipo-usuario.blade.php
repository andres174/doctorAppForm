<div>
    <div class="row justify-content-center">
        <div class="col-6 " >
            <div class="card ">
                <div class="card-header">
                    <h5 class="card-title">Tipo de Usuario</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        
                        @if ($button)
                            <form wire:submit.prevent="guardar">
                                @include('livewire.formTipo')

                                <button type="submit" class="btn btn-primary" >Guardar</button>
                                
                            </form>
                        @else
                            <form wire:submit.prevent="update">
                                @include('livewire.formTipo')
                                
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                
                            </form>
                        @endif
                   </div>
                   {{-- @if ($button)
                        <button type="button" class="btn btn-primary" wire:click="guardar">Guardar</button>
                   @else
                        <button type="button" class="btn btn-primary" wire:click="update">Actualizar</button>
                   @endif --}}
                   
                   {{-- <button type="button" class="btn btn-primary" wire:click="guardar">Guardar</button>
                  
                   <button type="button" class="btn btn-primary" wire:click="update">Actualizar</button> --}}
                  
                   
                    <input wire:model="search" type="search" class="form-control" placeholder="Buscar tipos...">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10" >
            <div class="card">
                <div class="card-body">
         
                    <table id="datatables-reponsive" class="table table-striped" style="width:75%" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipos</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($t as $item)
                            <tr>
                                <td>
                                   {{$item->id}}
                                </td>
                                <td>
                                    {{$item->tipo_usuario}}
                                </td>
                                <td>
                                    {{$item->estado}}
                                </td>
                                <td class="table-action">
                                    
                                    <a ><i class="align-middle fas fa-fw fa-pen" wire:click="edit({{ $item->id }})" style="cursor: pointer "></i></i></a>
                                    <a ><i class="align-middle fas fa-fw fa-trash " wire:click="destroyL({{$item->id}})" style="cursor: pointer "></i></i></a>
                                </td>
                            </tr>
                            @endforeach
                            {{ $t->links() }}
                        </tbody>
                        
                    </table>
                    
        
                </div>
                
            </div>
            </div>
            
            </div>
        </div>
</div>
