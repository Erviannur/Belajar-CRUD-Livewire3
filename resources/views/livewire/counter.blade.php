{{-- Kode ini akan menampilkan nilai properti $countdan dua tombol yang $countmasing-masing menambah dan mengurangi properti. --}}

<div>
    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>   
 
    <button wire:click="decrement">-</button>
</div>
