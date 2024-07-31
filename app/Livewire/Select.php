<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;

class Select extends Component
{

    public $statusID;

    #[Computed()]
    public function statuses()
    {
        return [
            ['id'=>'0', 'name'=>'Sangat Sesuai' ],
            ['id'=>'2', 'name'=>'Sesuai' ],
            ['id'=>'3', 'name'=>'Kurang Sesuai' ],
            ['id'=>'4', 'name'=>'Tidak Sesuai' ]];
    }

    public function render()
    {
        return view('livewire.select');
    }
}
