<div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Registro de Personas</h5>
                </div>
                <div class="card-body">
                    
                        @if ($button)
                            <form wire:submit.prevent="guardar">
                                @include('livewire.formDatosPersona')

                                <button type="submit" class="btn btn-primary" >Guardar</button>
                                
                            </form>
                        @else
                            <form wire:submit.prevent="update">
                                @include('livewire.formDatosPersona')
                                
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                
                            </form>
                        @endif
                        <br>
                        <br>
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        <br>
                        <br>
                        <input wire:model="search" type="search" class="form-control" placeholder="Buscar por cedula...">
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
                                <td> -- asi se haría normalmente --
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

                            {{ $p->links() }}
                        </tbody>
                    </table>
        
                </div>
            </div>
            </div>
            </div>
    </div>
</div>
