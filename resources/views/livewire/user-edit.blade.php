<div>
    <div>
        <div class="card">
             <div class="card-header">Form Edit</div>
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
                    <label for="email" class="form-label">Email Adress</nav></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" wire:model="email">
                    @error('email')
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
