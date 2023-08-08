<div>
    <table class="table">
        @include('livewire.user.include.show')
        @include('livewire.user.include.edit')
        @include('livewire.user.include.detail')
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
                    <button class="btn badge btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal" wire:click="detail({{ $item->id }})">Detail</button>
                    <button data-bs-toggle="modal" data-bs-target="#updateModal" wire:click="edit({{ $item->id }})"  class="btn badge btn-warning">Edit</button>
                    <button  class="btn badge btn-danger" wire:click="delete({{ $item->id }})">Delete</button>
                    {{-- <a href="{{ route('users.details',$item->id) }}" class="badge bg-primary">Detail</a>
                    <a href="{{ route('users.edit',$item->id) }}" class="badge bg-warning">Edit</a>
                    <button wire:click="delete({{ $item->id }})" class="btn badge btn-danger">Delete</button> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

