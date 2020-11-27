<?php

namespace App\Http\Livewire;

use App\Models\ClassSeat;
use App\Models\Flight;
use App\Models\Team;
use App\Models\Ticket;
use Livewire\Component;

class Tickets extends Component
{
    public $tickets;
    public $flight_id, $class_id, $user_id, $ticket_id;
    public $baggage;
    public $flights;
    public $classes;
    public $user;
    public $updateMode = false;
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
        $this->user = $user;

        if(!$user->hasTeamPermission($team, 'show')) {
            abort(401, 'У вас нет прав');
        }


        $this->flights = Flight::all();
        $this->classes = ClassSeat::all();
        $this->tickets = Ticket::all();
        return view('livewire.tickets', [$this->flights, $this->classes, $this->tickets, $this->user]);
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
        
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $user = auth()->user();
        // $this->validate([
        //     'flight_id' => 'required',
        //     'class_id' => 'required',
        //     'baggage' => 'required',
        // ]);
   
        Ticket::updateOrCreate(['id' => $this->ticket_id], [
            'flight_id' => $this->flight_id,
            'class_id' => $this->class_id,
            'user_id' => $user->id,
            'baggage' => $this->baggage,
        ]);
  
        session()->flash('message', 
            $this->ticket_id ? 'Билес успешно изменен' : 'Билет добавлен.');
  
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
        $ticket = Ticket::findOrFail($id);
        $this->ticket_id = $id;
        $this->flight_id = $ticket->flight_id;
        $this->class_id = $ticket->class_id;
        $this->user_id = $ticket->user_id;
        $this->baggage = $ticket->baggage;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Ticket::find($id)->delete();
        session()->flash('message', 'Билет удален успешно.');
    }
}
