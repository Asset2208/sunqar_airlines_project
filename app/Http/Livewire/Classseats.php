<?php

namespace App\Http\Livewire;

use App\Models\ClassSeat;
use App\Models\Team;
use Livewire\Component;

class Classseats extends Component
{
    public $classeats, $name, $classeat_id;
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


        $this->classeats = ClassSeat::all();
        return view('livewire.classeats');
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
        // ]);
   
        ClassSeat::updateOrCreate(['id' => $this->classeat_id], [
            'name' => $this->name,
        ]);
  
        session()->flash('message', 
            $this->classeat_id ? 'Класс обновлен успешно.' : 'Класс успешно создан');
  
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
        $class_seat = ClassSeat::findOrFail($id);
        $this->classeat_id = $id;
        $this->name = $class_seat->name;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        ClassSeat::find($id)->delete();
        session()->flash('message', 'Класс удален успешно.');
    }
}
