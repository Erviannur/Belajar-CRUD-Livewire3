<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserComponent extends Component
{
    use WithPagination;

    protected $listeners = ['userStore' => 'render'];

    public $user_id;

    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $email;

    #[Rule('required')]
    public $password;

    public $detailMode = false;

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function create(Request $request)
    {
        $validateData = $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::create($validateData);

        session()->flash('success','User Berhasil Dibuat');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $data = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $data->name;
        $this->email = $data->email;
    }

    public function update()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required'   
        ]);

        if ($this->user_id) {
            $data = User::find($this->user_id);
            $data->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
            $this->update = false;
            session()->flash('success', 'User Berhasil Diupdate');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
       if($id) {
        User::where('id',$id)->delete();
        session()->flash('success','User Berhasil Dihapus');
       }
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }


    public function render()
    {
        $data = [
            'title' => 'User',
            'users' => User::latest()->paginate(5),
        ];
        return view('livewire.user.user-component', $data)->extends('components.layouts.app')->section('content');
    }

    public function detail($id) 
    {
        $this->detailMode = false;
        $data = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->password = $data->password;
    }
}
