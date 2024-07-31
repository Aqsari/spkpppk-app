<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Dropdown extends Component
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
        return view(
            '/datapeserta/1'
        );
    }
}
