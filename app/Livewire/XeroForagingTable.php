<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\XeroForagingLocations;
use App\Models\XeroForagingStats;
use App\Models\XeroForageables;

class XeroForagingTable extends Component
{
    public $massedit;

    public $id = '';
    public $name = '';
    public $value = '';
    public $color = '';

    public function add($forage) //plus 1 on item
    {
        $item = XeroForagingStats::find($forage['id']);
        $item->amount = $forage['amount'] + 1;
        $item->save();
    }

    public function substract($forage)  //minus 1 on item
    {
        $item = XeroForagingStats::find($forage['id']);

        if(!$item->amount == 0){
            $item->amount = $forage['amount'] - 1;
            $item->save();
        }
    }

    public function addItem($location) //add item to location
    {
        $exist = [];

        foreach(XeroForagingStats::all()->where('foraging_location_id', $location) as $forage) {
            array_push($exist, $forage->forageable->id);
        }

        if(in_array($this->id, $exist) || $this->id == null){
            $all = [];

            foreach(XeroForageables::all()->sortby('name') as $i) {
                array_push($all, $i->id);
            }

            $new = array_diff($all, $exist);

            if(in_array($this->id, $exist)) {
                $pos = array_search($this->id, $all);

                for(;!array_key_exists($pos, $new); $pos++){
                    //do nothing
                }

                $this->id = $new[$pos];
            } elseif($this->id == null) {
                $this->id = reset($new);
            }
        }

        XeroForagingStats::create(['foraging_location_id'=> $location, 'forageable_id' => $this->id, 'amount'=> 0]);
    }

    public function delete($forage) //delete item from location
    {
        $item = XeroForagingStats::find($forage['id']);
        $item->delete();
    }

    public function createItem() //create new item
    {
        if($this->value == null){
            $this->value = 0;
        }

        XeroForageables::updateOrCreate(['name'=>$this->name, 'value'=>$this->value]);
    }

    public function newLocation() //create new location
    {
        XeroForagingLocations::updateOrCreate(['name'=>$this->name, 'color'=>$this->color]);
    }

    public function render()
    {
        $forages = XeroForagingStats::all();

        return view('project_xero.foraging.xero-foraging-table', [
            'locations' => XeroForagingLocations::all(),
            'forages' => $forages->sortby('forageable.name'),
            'forageables' => XeroForageables::all()->sortby('name'),
            'updated' => $forages->sortByDesc('updated_at')->first()->updated_at ?? null,
        ]);
    }
}
