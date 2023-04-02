<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('dashboard.edit_user', $item->id) }}" class="btn btn-warning">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
