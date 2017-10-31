<div class="col-lg-12">
    <div class="card">
        {{--<div class="card-close">--}}
            {{--<div class="dropdown">--}}
                {{--<button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>--}}
                {{--<div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="card-header d-flex align-items-center">
            <a class="btn btn-success" href="{{ route('prospects.create') }}"><i class="fa fa-plus mr-2"></i>Nuevo prospecto</a>

        </div>
        <div class="card-body">
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Sitio web</th>
                    <th>URL</th>
                    <th>Dirección</th>
                    <th>Giro</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Nombre de Contacto</th>
                    <th>Comentarios</th>
                    <th>Seguimiento</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($prospects as $prospect)
                    <tr>
                        <td>{{ $prospect->id }}</td>
                        <td>{{ $prospect->website }}</td>
                        <td>{{ $prospect->url }}</td>
                        <td>{{ $prospect->address }}</td>
                        <td>{{ $prospect->order }}</td>
                        <td>{{ $prospect->email }}</td>
                        <td>{{ $prospect->phone }}</td>
                        <td>{{ $prospect->contact_name }}</td>
                        <td>{{ $prospect->comments }}</td>
                        <td>{{ $prospect->tracing }}</td>
                        <td>{{ $prospect->status }}</td>
                        <td>
                            <a href="{{ route('prospects.edit', $prospect->id) }}" class="btn btn-info" title="Editar"> Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>