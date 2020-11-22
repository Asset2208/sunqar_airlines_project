<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Post;
use App\Models\Team;
use Livewire\Component;

class Countries extends Component
{
    public $countries, $name, $cimg, $country_id;
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


        $this->countries = Country::all();
        return view('livewire.countries');
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
        $this->cimg = '';
        $this->country_id = '';
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
            'cimg' => 'required',
        ]);
   
        Country::updateOrCreate(['id' => $this->country_id], [
            'name' => $this->name,
            'cimg' => $this->cimg
        ]);
  
        session()->flash('message', 
            $this->country_id ? 'Страна успешно обновлена' : 'Страна успешно добавлена.');
  
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
        $country = Country::findOrFail($id);
        $this->country_id = $id;
        $this->name = $country->name;
        $this->cimg = $country->cimg;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Country::find($id)->delete();
        session()->flash('message', 'Страна удалена успешно.');
    }
}
