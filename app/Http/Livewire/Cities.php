<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Team;
use Livewire\Component;

class Cities extends Component
{
    public $cities, $name, $shortCode, $city_id, $country_id;
    public $countries;
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


        $this->cities = City::all();
        $this->countries = Country::all();
        return view('livewire.cities', [$this->countries]);
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
        $this->city_id = '';
        $this->country_id = '';
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
   
        City::updateOrCreate(['id' => $this->city_id], [
            'country_id' => $this->country_id,
            'name' => $this->name,
            'short_code' => $this->shortCode,
        ]);
  
        session()->flash('message', 
            $this->country_id ? 'Город успешно обновлен' : 'Город успешно добавлен.');
  
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
        $city = City::findOrFail($id);
        $this->city_id = $id;
        $this->country_id = $city->country_id;
        $this->name = $city->name;
        $this->shortCode = $city->short_code;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        City::find($id)->delete();
        session()->flash('message', 'Город удален успешно.');
    }
}
