<?php

namespace App\Livewire\ProjectXero\Foraging;

use Livewire\Component;
use App\Models\XeroForagingLocations;
use App\Models\XeroForagingStats;
use App\Models\XeroForageables;

class Submit extends Component
{
    public $amount;
    public $location;
    public $forageable;

    public function addItems()
    {
        if($this->location == null){
            $this->location = XeroForagingLocations::all()->first()->id;
        }

        if($this->forageable == null){
            $this->forageable= XeroForageables::all()->sortby('name')->first()->id;
        }

        $existing = XeroForagingStats::where([
                        ['foraging_location_id', $this->location],
                        ['forageable_id', $this->forageable]
                    ])
                    ->first();

        if($this->amount == null || $this->amount == 0){
            if($existing == null){
                $this->amount = 1;
            } else {
                $this->amount = $existing->amount + 1;
            }
        } elseif($existing != null) {
            $this->amount = $existing->amount + $this->amount;
        }

        if($existing == null){
            XeroForagingStats::create(['foraging_location_id'=> $this->location, 'forageable_id' => $this->forageable, 'amount'=> $this->amount]);
        } else {
            $existing->update(['amount' => $this->amount]);
        }

        $this->amount = '';

        session()->flash('message', 'Forage added succesfully');
    }

    public function render()
    {
        return view('project_xero.foraging.submit', [
            'locations' => XeroForagingLocations::all(),
            'forages' => XeroForagingStats::all()->sortby('forageable.name'),
            'forageables' => XeroForageables::all()->sortby('name'),
        ]);
    }
}
