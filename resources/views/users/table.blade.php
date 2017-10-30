<table class="table table-striped">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Puesto de trabajo</th>
        <th>email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->job_position }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>