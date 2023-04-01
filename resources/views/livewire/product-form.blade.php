<div>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="categoriesid" class="form-label">Choose Category</label>
                    <select id="categories_id" wire:model="categories_id" class="form-select mb-3">
                        <option hidden>Choose one category</option>
                        @foreach ($categories as $category)
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name">
                    @error('name')
                        <span class="text-danger"></span>
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Product Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" wire:model="description">
                    @error('description')
                        <span class="text-danger"></span>
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model="price">
                    @error('price')
                        <span class="text-danger"></span>
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Product Photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" wire:model="photo">
                    @error('photo')
                        <span class="text-danger"></span>
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
