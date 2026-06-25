<?php

namespace App\Services;

use App\Models\Item;
use Illuminate\Support\Facades\Log;

class ItemService
{
    public function all() {
        return Item::all();
    }

    public function find($id) {
        return Item::findOrFail($id);
    }

    public function create(array $data) {
        $item = Item::create($data);
        Log::info('Item created', ['id' => $item->id, 'data' => $data]);
        return $item;
    }

    // Ubah parameter menjadi $id
    public function update($id, array $data) {
        $item = Item::findOrFail($id);
        $item->update($data);
        Log::info('Item updated', ['id' => $item->id, 'changes' => $data]);
        return $item;
    }

    // Ubah parameter menjadi $id
    public function delete($id) {
        $item = Item::findOrFail($id);
        $item->delete();
        Log::info('Item deleted', ['id' => $id]);
    }
}