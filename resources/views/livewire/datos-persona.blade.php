<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Registro de Personas</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label>Tipos</label>
                                <select class="form-control select2" data-bs-toggle="select2" wire:model="id_tipo" style="cursor: pointer ">
                                    <option>Selecionar0...</option>
                                    @foreach ($t as $item)
                                       <option value="{{$item->id}}">{{$item->tipo_usuario}}</option>
                                   @endforeach                         
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Nombre</label>
                                <input type="text" class="form-control" wire:model="nombre" >
                            </div>
                            <div class="mb-3">
                                <label>Apellido</label>
                                <input type="text" class="form-control" wire:model="apellido" >
                            </div>
                            
                            <div class="mb-3">
                                <label>Telefono</label>
                                <input type="text" class="form-control" wire:model="celular">
                            </div>  


                            @if ($button)
                                <button type="button" class="btn btn-primary" wire:click="guardar">Guardar</button>
                            @else
                                <button type="button" class="btn btn-primary" wire:click="update">Actualizar</button>
                            @endif

                            {{-- <button type="button" class="btn btn-primary" wire:click="guardar">guardar</button>   
                            <button type="button" class="btn btn-primary" wire:click="update">actualizar</button> --}}
                                            
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
                            </div>
                            <div class="mb-3">
                                <label>Cedula</label>
                                <input type="text" class="form-control" wire:model="cedula">
                            </div>
                            <div class="mb-3">
                                <label>Direccion</label>
                                <input type="text" class="form-control" wire:model="direccion">                          
                            </div>
                        </div>
                           
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12" >
            <div class="card">
                <div class="card-body">
         
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cedula</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Tipo</th>
                                <th>Especialidad</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($p as $item)
                            <tr>
                                <td>
                                   {{$item->id}}
                                </td>
                                <td>
                                    {{$item->nombre}}
                                </td>
                                <td>
                                    {{$item->apellido}}
                                </td>
                                <td>
                                    {{$item->cedula}}
                                </td>
                                <td>
                                    {{$item->direccion}}
                                </td>
                                <td>
                                    {{$item->celular}}
                                </td>

                                @foreach ($t as $tipoM)
                                    @if ($tipoM->id == $item->id_tipo)
                                        <td>
                                            {{$tipoM->tipo_usuario}}
                                        </td>
                                    @endif
                                @endforeach

                                @foreach ($e as $especialidadM)
                                    @if ($especialidadM->id == $item->id_especialidad)
                                        <td>
                                            {{$especialidadM->especialidad}}
                                        </td>
                                    @endif
                                @endforeach

                                {{-- @if ($tipoM->id == $item->id_tipo)
                                    <td>
                                        {{$tipoM->tipo_usuario}}
                                    </td>
                                @endif
                                <td>
                                    {{$item->id_tipo}}
                                </td> --}}
                                {{-- <td>
                                    {{$item->id_especialidad}}
                                </td> --}}
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
