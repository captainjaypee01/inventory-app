<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InventoryController extends Controller
{
    //
    public function index(){
        $inventories = Inventory::all();
        return view('inventory.index', [
            'inventories' => $inventories,
        ]);
    }

    public function create(){
        return view('inventory.create');
    }

    public function edit(Inventory $inventory){
        return view('inventory.edit', [
            'inventory' => $inventory,
        ]);
    }

    public function store(Request $request){
        $inventory = new Inventory();

        return $this->save($request, $inventory);
    }

    public function update(Request $request, Inventory $inventory){

        return $this->save($request, $inventory);
    }

    public function save($request, $inventory){
        Log::info($request);
        request()->validate([
            'name' => 'required',
            'quantity' => 'required',
            'amount' => 'required',
        ]);

        if(isset($request['name'])){
            $inventory->name = $request['name'];
        }

        if(isset($request['quantity'])){
            $inventory->quantity = $request['quantity'];
        }

        if(isset($request['amount'])){
            $inventory->amount = $request['amount'];
        }

        $inventory->save();

        return redirect(route('inventory.index'))->with('success', 'Product Saved');
    }

    public function delete(Inventory $inventory){

        $inventory->delete();
        return redirect(route('inventory.index'))->with('success','Product Deleted');

    }

}
