<?php

namespace App\Http\Livewire;

use App\Models\Airline;
use App\Models\Team;
use Livewire\Component;

class Airlines extends Component
{
    public $airlines, $name, $airline_photo, $airline_id;
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

        if(!$user->hasTeamPermission($team, 'show')) {
            abort(401, 'У вас нет прав');
        }


        $this->airlines = Airline::all();
        return view('livewire.airlines');
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
        $this->name = '';
        $this->airline_photo = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'airline_photo' => 'required',
        ]);
   
        Airline::updateOrCreate(['id' => $this->airline_id], [
            'name' => $this->name,
            'airline_photo' => $this->airline_photo
        ]);
  
        session()->flash('message', 
            $this->airline_id ? 'Airline Updated Successfully.' : 'Airline Created Successfully.');
  
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
        $airline = Airline::findOrFail($id);
        $this->airline_id = $id;
        $this->name = $airline->name;
        $this->airline_photo = $airline->airline_photo;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Airline::find($id)->delete();
        session()->flash('message', 'Авиалиния удален успешно.');
    }
}
