<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Team;
use Livewire\Component;

class Contacts extends Component
{
    public $contacts, $type, $name, $email, $user_id, $ticket, $date, $message, $answer, $contacts_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $team = Team::find(4);
        $user = auth()->user();

        if(!$user->hasTeamPermission($team, 'show')) {
            abort(401, 'У вас нет прав');
        }


        $this->contacts = Contact::all();
        return view('livewire.contacts_admin');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->type = '';
        $this->name = '';
        $this->email = '';
        $this->user_id = '';
        $this->ticket = '';
        $this->date = '';
        $this->message = '';
        $this->answer = '';
        $this->contacts_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'type' => 'required',
            'name' => 'required',
            'email' => 'required',
            'user_id' =>'required',
            'ticket' => 'required',
            'date' => 'required',
            'message' => 'required',
            'answer' => 'required',
            'contacts_id' => 'required'
        ]);
   
        Contact::updateOrCreate(['id' => $this->contacts_id], [
            'type' => $this->type,
            'name' => $this->name,
            'email' => $this->email,
            'user_id' => $this->user_id,
            'ticket' => $this->ticket,
            'date' => $this->date,
            'message' => $this->message,
            'answer' => $this->answer,
            'contacts_id' => $this->contacts_id
        ]);
  
        session()->flash('message', 
            $this->contacts_id ? 'Contacts Updated Successfully.' : 'Contacts Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $this->contacts_id = $id;
        $this->type = $contact->type;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->user_id = $contact->user_id;
        $this->ticket = $contact->ticket;
        $this->date = $contact->date;
        $this->message = $contact->message;
        $this->answer = $contact->answer;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Contact::find($id)->delete();
        session()->flash('message', 'Контактная форма удалена успешно.');
    }
}
