<div>
    <div class="card">
        <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td><img src="{{ asset('storage/'.$item->icon) }}" class="img-thumbnail rounded-top" style="width:100px" alt=""></td>
                        <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
