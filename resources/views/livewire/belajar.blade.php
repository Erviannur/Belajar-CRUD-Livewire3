{{-- <!-- Properties -->

<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model.live="nama">                                             <!-- Input. Apapun yang diketikan di form control akan terender di variable nama --> 
        
        <textarea class="form-control" wire:model.live="nama"></textarea>                                           <!-- textarea -->

        <input type="radio" name="jenis_kelamin" value="laki-laki" wire:model.live="jenisKelamin"> Laki-laki        <!-- radio -->
        <input type="radio" name="jenis_kelamin" value="perempuan" wire:model.live="jenisKelamin"> Perempuan

        <select class="form-select" wire:model.live="jenisKelamin">                                                 <!-- select -->
            <option hidden>Pilih jenis jenisKelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <input                                                                                                 
        @if($show_password == 'show')
            type="text"
        @else
            type="password"
        @endif
        class="form-control" wire:model.live="nama">                                                                <!-- checkbox -->

        <label for="">Show Password</label>
        <input type="checkbox" wire:model.live="show_password" value="show">
    </div>

    Halo nama saya {{ $nama }}.
    Saya {{ $jenisKelamin }} berumur {{ $umur }} tahun.

</div> --}}

{{-- ,<!-- Action -->
<div>
    <div class="mb-3">
        <input type="number" class="form-control" wire:model.live="keranjang">
    </div>
    <button class="btn btn-primary" wire:click="plus">+ plus</button>
    @if ($keranjang>=1)
        <button class="btn btn-danger" wire:click="minus">- minus</button>    
    @endif
</div> --}}

<div>
    <div>
        
    </div>
</div>
