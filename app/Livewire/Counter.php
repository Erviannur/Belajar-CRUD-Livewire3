<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $count = 1;              //Mendeklarasikan properti publik yang dinamai $countdengan nilai awal 1.       //Mendeklarasikan metode publik bernama
 
    public function increment()     //Mendeklarasikan metode publik bernama increment()yang menambah $countproperti setiap kali dipanggil. Metode publik seperti ini dapat dipicu dari browser dengan berbagai cara, termasuk saat pengguna mengklik tombol.
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()        //Mendeklarasikan render()metode yang mengembalikan tampilan Blade. Tampilan Blade ini akan berisi template HTML untuk komponen kita.
    {
        return view('livewire.counter');
    }
}