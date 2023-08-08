<div class="container">
    <h1 style="font-size: 50px">Belajar CRUD Component</h1>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            @include('my_components.alert_success')
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" @error('name') is-invalid @enderror wire:model="name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" @error('email') is-invalid @enderror wire:model="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" @error('password') is-invalid @enderror wire:model="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror               
                </div>
                <button type="submit" wire:click.prevent='create' class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>