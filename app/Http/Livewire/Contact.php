<?php

namespace App\Http\Livewire;

use App\Models\Contact as ContactModel;
use Livewire\Component;

class Contact extends Component
{
    public $records, $name, $email, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->records = ContactModel::all();
        return view('livewire.contact');
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:contacts'
        ]);

        ContactModel::create([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->resetInput();

        session()->flash(
            'm',
            'Contact Created Successfully.'
        );
    }

    public function edit($id)
    {
        $record = ContactModel::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email'
        ]);

        if ($this->selected_id) {
            $record = ContactModel::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);

            $this->resetInput();
            $this->updateMode = false;

            session()->flash(
                'm',
                'Contact Updated Successfully.'
            );
        }
    }

    public function delete($id)
    {
        if ($id) {
            $record = ContactModel::where('id', $id);
            $record->delete();

            session()->flash(
                'm',
                'Contact Deleted Successfully.'
            );
        }
    }
}
