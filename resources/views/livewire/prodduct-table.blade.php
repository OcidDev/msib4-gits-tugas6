<div>
    <div class="card">
        @include('my_components.alert_succes')
        <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Photo</th>
                        <th>price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td><img src="{{ asset('storage/'.$item->photo) }}" class="img-thumbnail rounded-top" style="width:100px" alt=""></td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">Detail</a>
                            <a href="{{ route('dashboard.product_edit',$item->id) }}" class="btn btn-warning">Edit</a>
                            <button wire:click="delete({{ $item->id }})" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
