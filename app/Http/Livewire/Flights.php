<?php

namespace App\Http\Livewire;

use App\Models\Airline;
use App\Models\City;
use App\Models\Flight;
use App\Models\Team;
use Livewire\Component;

class Flights extends Component
{
    public $flights, $city_from_id, 
    $city_to_id, $airline_id,
    $flight_date, $flight_time,
    $departure_hour, $flight_id;
    public $cities;
    public $airlines;
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


        $this->flights = Flight::all();
        $this->cities = City::all();
        $this->airlines = Airline::all();
        return view('livewire.flights', [$this->cities, $this->airlines]);
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
        $this->city_from_id = '';
        $this->city_to_id = '';
        $this->airline_id = '';
        $this->flight_date = '';
        $this->flight_time = '';
        $this->departure_hour = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        // $this->validate([
        //     'city_from_id' => 'required',
        //     'city_to_id' => 'required',
        //     'airline_id' => 'required',
        //     'flight_date' => 'required',
        //     'flight_time' => 'required',
        //     'departure_hour' => 'required',
        // ]);
   
        Flight::updateOrCreate(['id' => $this->flight_id], [
            'city_from_id' => $this->city_from_id,
            'city_to_id' => $this->city_to_id,
            'airline_id' => $this->airline_id,
            'flight_date' => $this->flight_date,
            'flight_time' => $this->flight_time,
            'departure_hour' => $this->departure_hour
        ]);
  
        session()->flash('message', 
            $this->flight_id ? 'Flight Updated Successfully.' : 'Flight Created Successfully.');
  
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
        $flight = Flight::findOrFail($id);
        $this->flight_id = $id;
        $this->city_from_id = $flight->city_from_id;
        $this->city_to_id = $flight->city_to_id;
        $this->airline_id = $flight->airline_id;
        $this->flight_date = $flight->flight_date;
        $this->flight_time = $flight->flight_time;
        $this->departure_hour = $flight->departure_hour;

        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Flight::find($id)->delete();
        session()->flash('message', 'Авиарейс удален успешно.');
    }
}
