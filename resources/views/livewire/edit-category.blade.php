<div>
    <div>
        <div class="card">
             <div class="card-header">Form Category Edit</div>
                <div class="card-body">
                <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</nav></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                    @error('name')
                        <span class="text-danger"></span>
                        <div class="invalid-feedback">
                            {{ $message  }}
                        </div>
                     @enderror
                 </div>
                 <div class="mb-3">
                    <label for="description" class="form-label">Description Adress</nav></label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model="description">
                    @error('description')
                        <span class="text-danger"></span>
                        <div class="invalid-feedback">
                             {{ $message  }}
                        </div>
                     @enderror
                </div>

                 <div class="mb-3">
                    <label for="icon" class="form-label">icon Adress</nav></label>
                    <input type="file" class="form-control @error('icon') is-invalid @enderror" wire:model="icon">
                    @error('icon')
                        <span class="text-danger"></span>
                        <div class="invalid-feedback">
                             {{ $message  }}
                        </div>
                     @enderror
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
            </div>
        </div>
    </div>

</div>
