<table class="table" data-show-toggle="false">
    <thead>
        <tr>
            <th>#</th>
            <th data-breakpoints="">Sitio web</th>
            <th data-breakpoints="">URL</th>
            <th data-breakpoints="xs">Dirección</th>
            <th data-breakpoints="xs">Giro</th>
            <th data-breakpoints="xs">Email</th>
            <th data-breakpoints="all">Telefono</th>
            <th data-breakpoints="all">Nombre de Contacto</th>
            <th data-breakpoints="all">Comentarios</th>
            <th data-breakpoints="all">Seguimiento</th>
            <th data-breakpoints="all">Estatus</th>
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
                <a href="{{ route('prospects.edit', $prospect->id) }}" class="btn btn-info" title="Editar">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>