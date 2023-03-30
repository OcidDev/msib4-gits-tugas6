<div>
    <div class="card">
         <div class="card-header">Form</div>
            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <form wire:submit.prevent="store">
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</nav></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                @error('name')
                    <span class="text-danger"></span>
                    <div class="invalid-feedback">
                        {{ $message  }}
                    </div>
                 @enderror
             </div>
             <div class="mb-3">
                <label for="description" class="form-label">Category Description</nav></label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model="description">
                @error('description')
                    <span class="text-danger"></span>
                    <div class="invalid-feedback">
                         {{ $message  }}
                    </div>
                 @enderror
            </div>
            <div class="mb-3">
                <label for="icon" class="form-label">Category Icon</nav></label>
                <input type="file" class="form-control @error('icon') is-invalid @enderror" wire:model="icon">
                @error('icon')
                    <span class="text-danger"></span>
                    <div class="invalid-feedback">
                        {{ $message  }}
                    </div>
                 @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
