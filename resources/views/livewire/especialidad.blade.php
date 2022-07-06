<div>
    <div class="justify-content-center">
        <div class="col-6 " >
            <div class="card ">
                <div class="card-header">
                    <h5 class="card-title">Tipo de Especialidad</h5>
                </div>
                <div class="card-body">         
                       <div class="mb-3">
                            <label class="form-label">Especialidad</label>
                            <input type="text" class="form-control" placeholder="" wire:model="especialidad">
                       </div>

                       @if ($button)
                            <button type="button" class="btn btn-primary" wire:click="guardar">Guardar</button>
                       @else
                            <button type="button" class="btn btn-primary" wire:click="update">Actualizar</button>
                       @endif
                   
                       {{-- <button type="button" class="btn btn-primary" wire:click="guardar">guardar</button>
                      
                       <button type="button" class="btn btn-primary" wire:click="update">actualizar</button> --}}
                      
                        
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
                                <th>Especialidad</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($e as $item)
                            <tr>
                                <td>
                                   {{$item->id}}
                                </td>
                                <td>
                                    {{$item->especialidad}}
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
                        </tbody>
                    </table>
        
                </div>
            </div>
            </div>
            </div>
        </div>
</div>
