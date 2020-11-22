<?php

namespace App\Http\Livewire;

use App\Models\Airport;
use App\Models\City;
use Livewire\Component;

class Airports extends Component
{
    public $airports, $name, $address, $airport_id, $city_id;
    public $cities;
    public $updateMode = false;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        // $team = Team::find(4);
        // $user = auth()->user();

        // if(!$user->hasTeamPermission($team, 'show')) {
        //     abort(401, 'У вас нет прав');
        // }


        $this->airports = Airport::all();
        $this->cities = City::all();
        return view('livewire.airports', [$this->cities]);
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
        $this->shortCode = '';
        $this->airport_id = '';
        $this->city_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        // $this->validate([
        //     'name' => 'required',
        //     'short_code' => 'required',
        //     'country_id' => 'required',
        // ]);
   
        Airport::updateOrCreate(['id' => $this->airport_id], [
            'city_id' => $this->city_id,
            'name' => $this->name,
            'address' => $this->address,
        ]);
  
        session()->flash('message', 
            $this->airport_id ? 'Аэропорт успешно обновлен' : 'Аэропорт успешно добавлен.');
  
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
        $airport = Airport::findOrFail($id);
        $this->airport_id = $id;
        $this->city_id = $airport->city_id;
        $this->name = $airport->name;
        $this->address = $airport->address;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Airport::find($id)->delete();
        session()->flash('message', 'Город удален успешно.');
    }
}

