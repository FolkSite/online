<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use App\BoardsType;

class BoardsTypesController extends Controller {
    
    protected $rules = [
        'name' => 'required|max:255|unique:boards_types,name',
        'price' => 'integer|min:0',
        'css_class_name' => 'required|max:255',
        'export_prefix' => 'required|max:255',
    ];

    /**
     * Вывод списка
     * 
     * @return Response
     */
    public function index() {
        $items= BoardsType::withTrashed()->get();
        return view('boards.types.index', compact('items'));
    }
    
    /**
     * Редактирование
     * 
     * @param  \App\BoardsType $item
     * @return Response
     */
    public function edit(BoardsType $item) {
//                dd(storage_path());
//                dd(csrf_token());

        return view('boards.types.edit', compact('item'));
    }
    
    /**
     * Создание
     * 
     * @return Response
     */
    public function create() {
        return view('boards.types.create');
    }
    
    /**
     * Сохранение
     * 
     * @param Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, $this->rules);
        
        $input = Input::all();
        BoardsType::create($input);
        
        return Redirect::route('boards.types.index')->with('message', 'Item created');
    }
    
    /**
     * Обновление
     * 
     * @param  \App\BoardsType $item
     * @param Illuminate\Http\Request $request
     * @return Response
     */
    public function update(BoardsType $item, Request $request) {
        $this->rules['name'] .= ','.$item->id; // Forcing A Unique Rule To Ignore A Given ID
        $this->validate($request, $this->rules);
        
        $input = array_except(Input::all(), '_method');
        $item->update($input);
        
        return Redirect::route('boards.types.index')->with('message', 'Item updated.');
    }
    
    /**
     * Удаление
     * 
     * @param  \App\BoardsType $item
     * @return Response
     */
    public function destroy(BoardsType $item) {
//        dd($item);
        $item->delete();

        return Redirect::route('boards.types.index')->with('message', 'Item deleted');
    }
    
    /**
     * Восстановление
     * 
     * @param  integer $id
     * @return Response
     */
    public function restore($id) {
        BoardsType::withTrashed()->find($id)->restore();

        return Redirect::route('boards.types.index')->with('message', 'Item restored');
    }

}
    