<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Historico;

// --------------------------------------------------------------------- T E S T ----
Route::get('/clientes', function () {
    $cliente = Cliente::get();
    return view('clientes', ['clientes'=>$cliente]);
});

// --------------------------------------------------------------------- CLIENTE MOSTAR ----
Route::get('/', function () {
    $cliente = Cliente::get();
    return view('datatable', ['clientes'=>$cliente]);
})->name('clientes');

Route::get('/cliente/{id}', function ($id) {
    $cliente = Cliente::find($id);
    $nasc = $cliente['nascimento'];
    $nasc2 = new DateTime($nasc);
    $hoje = date('Y/m/d');    
    $hoje2 = new DateTime($hoje);
    $idade = $hoje2->diff($nasc2);
    return view('cliente', ['cliente'=>$cliente, 'idade'=>$idade->y]);
})->name('cliente');

Route::get('/clientess', function () {
    $cliente = Cliente::get();
    return $cliente;
}); // retorna um json

// --------------------------------------------------------------------- CLIENTE CRIAR ----
Route::get('/cliente-cadastro', function () {
    return view('clienteform');
});

Route::post('/cliente-cadastro-api', function(Request $request) {
    //dd($request->all());
    Cliente::create([
        'nome'=>$request->nome,
        'data'=>$request->data,
        'morada'=>$request->morada,
        'nascimento'=>$request->nascimento,
        'indicacao'=>$request->indicacao,
        'qtdsessoes'=>$request->qtdsessoes,
        'escolaridade'=>$request->escolaridade,
        'telefone'=>$request->telefone,
        'email'=>$request->email,
        'nif'=>$request->nif,
        'familiar'=>$request->familiar,
        'queixa'=>$request->queixa
    ]);
    return redirect('/');
    //echo "Produto cadastrado com sucesso!";
});

// --------------------------------------------------------------------- CLIENTE EDITAR ----
Route::get('/cliente-editar/{id}', function ($id) {
    $cliente = Cliente::find($id);
    return view('clienteformed',['cliente'=>$cliente]);    
});

Route::post('/cliente-editar-api/{id}', function (Request $request, $id) {
    //dd($request->all());
    $cliente = Cliente::find($id);
    $cliente->update([
        'nome'=>$request->nome,
        'data'=>$request->data,
        'morada'=>$request->morada,
        'nascimento'=>$request->nascimento,
        'indicacao'=>$request->indicacao,
        'qtdsessoes'=>$request->qtdsessoes,
        'escolaridade'=>$request->escolaridade,
        'telefone'=>$request->telefone,
        'email'=>$request->email,
        'nif'=>$request->nif,
        'familiar'=>$request->familiar,
        'queixa'=>$request->queixa    
    ]);
    //echo "Cliente editado!";
    return redirect('/');
});

// --------------------------------------------------------------------- CLIENTE DELETAR ----
Route::get('/cliente-deletar-api/{id}', function ($id) {
    $cliente = Cliente::find($id);
    $cliente->delete();
    return redirect()->route('clientes');    
});

// --------------------------------------------------------------------- HISTÓRICOS ----
Route::get('/historicos/{id}', function (Request $request, $id) {
    $cliente = Cliente::find($id);
    $historico = Historico::where('idc','=', "{$id}")->orderBy('datah', 'desc')->get();
    //session()->flash('cli',$id);
    //session()->forget('idc');
    //data = $request->session()->all();
    return view('historicos', ['cliente'=>$cliente, 'historicos'=>$historico]);
})->name('historicos');

// --------------------------------------------------------------------- HISTÓRICO EDITAR ----
Route::get('/historico-editar/{id}', function ($id) {
    $historico = Historico::find($id);
    return view('historicoformed',['historico'=>$historico]);
    //return view('historicomodal',['historico'=>$historico]);    
});

Route::post('/historico-editar-api/{id}', function (Request $request, $id) {
    //dd($request->all());
    $historico = Historico::find($id);
    $historico->update([
        'idc'=>$request->idc,
        'datah'=>$request->datah,
        'descricao'=>$request->descricao, 
    ]);
    return redirect()->route('historicos', ['id' => $request->idc]);
});

// --------------------------------------------------------------------- HISTÓRICOS CRIAR----
Route::post('/historico-cadastro-api', function(Request $request) {    
    //dd($request->all());
    Historico::create([
        'idc'=>$request->id,
        'datah'=>$request->data,
        'descricao'=>$request->historico        
    ]);
    $idd = $request->id;
    return redirect()->route('historicos', ['id' => $idd]);
});

// --------------------------------------------------------------------- HISTÓRICOS DELETAR ----
Route::get('/historico-deletar-api/{id}/{idc}', function ($id, $idc) {
    $historico = Historico::find($id);
    $historico->delete();
    return redirect()->route('historicos', ['id' => $idc]);    
});


//https://www.youtube.com/watch?v=_EFEwCQRXBY
//Product::all() : retrieve all product records.
//Product::find(1) : retrieve the product with id 1.
//Product::findOrFail(1) : it is similar to the previous one, but it will throw an exception if no result is found.
//Product::create(['name' => 'TV', ...]) : create a new record in the database. You must pass an associative
//Product::destroy(1) : remove the product with id 1