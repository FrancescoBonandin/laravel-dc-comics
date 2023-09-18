<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models

use App\Models\Comic;

class ComicController extends Controller
{

    public function home(){

        return view('home');

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $comics=Comic::all();

        return view('index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $request->validate(

            [

                'title'=>'required|string|min:1|max:100',
                'description'=>'required|nullable|string',
                'thumb'=>'required|string|min:1|max:1024',
                'price'=>'required|numeric|min:0.01|max:999',
                'series'=>'required|string|min:1|max:100',
                'sale_date'=>'required|date',
                'type'=>'required|string|min:1|max:32',
                'artists'=>'required|string',
                'writers'=>'required|string',

            ],
            [

                'title.required'=>'Il titolo è obbligatorio',
                'title.min'=>'Il titolo è troppo corto, deve essere almeno 1 carattere',
                'title.max'=>'Il titolo è troppo lungo, deve essere al massimo 100 caratteri',

                'description.required'=>'La descrizione è obbligatoria',

                'thumb.required'=>"Il percorso dell' immagine è obbligatoria",
                'thumb.min'=>"Il percorso dell' immagine è troppo corto",
                'thumb.max'=>"Il percorso dell' immagine è troppo lungo",

                'price.required'=>"Il prezzo è obbligatorio",
                'price.min'=>"Il prezzo deve essere maggiore di 0,00",
                'price.max'=>"Il prezzo deve essere minore di 999,00",

                'series.required'=>'La serie è obbligatorio',
                'series.min'=>'La serie è troppo corto, deve essere almeno 1 carattere',
                'series.max'=>'La serie è troppo lungo, deve essere al massimo 100 caratteri',

                'sale_date.required'=>'La data è obbligatoria',
                'sale_date.date'=>'La data non è inserita in un formato valido',

                'type.required'=>'Il tipo è obbligatorio',
                'type.min'=>'La serie è troppo corto, deve essere almeno 1 carattere',
                'type.max'=>'La serie è troppo lungo, deve essere al massimo 32 caratteri',

                'artists.required'=>"Gli artisti sono obbligatori",
                'writers.required'=>"Gli scrittori sono obbligatori",

            ]
            

        );
        
        $formData = $request->all();

        $comic = new Comic();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->thumb = $formData['thumb'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date =date('Y-m-d',strtotime($formData['sale_date']) );
        $comic->type = $formData['type'];
        $comic->artists = json_encode(explode(',', $formData['artists']));
        $comic->writers = json_encode(explode(',', $formData['writers']));
        $comic->save();
        return redirect()->route('home.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic=Comic::find($id);

        return view('show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic=Comic::find($id);

        return view('edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate(

            [

                'title'=>'required|string|min:1|max:100',
                'description'=>'required|nullable|string',
                'thumb'=>'required|string|min:1|max:1024',
                'price'=>'required|numeric|min:0.01|max:999',
                'series'=>'required|string|min:1|max:100',
                'sale_date'=>'required|date',
                'type'=>'required|string|min:1|max:32',
                'artists'=>'required|string',
                'writers'=>'required|string',

            ],
            [

                'title.required'=>'Il titolo è obbligatorio',
                'title.min'=>'Il titolo è troppo corto, deve essere almeno 1 carattere',
                'title.max'=>'Il titolo è troppo lungo, deve essere al massimo 100 caratteri',

                'description.required'=>'La descrizione è obbligatoria',

                'thumb.required'=>"Il percorso dell' immagine è obbligatoria",
                'thumb.min'=>"Il percorso dell' immagine è troppo corto",
                'thumb.max'=>"Il percorso dell' immagine è troppo lungo",

                'price.required'=>"Il prezzo è obbligatorio",
                'price.min'=>"Il prezzo deve essere maggiore di 0,00",
                'price.max'=>"Il prezzo deve essere minore di 999,00",

                'series.required'=>'La serie è obbligatorio',
                'series.min'=>'La serie è troppo corto, deve essere almeno 1 carattere',
                'series.max'=>'La serie è troppo lungo, deve essere al massimo 100 caratteri',

                'sale_date.required'=>'La data è obbligatoria',
                'sale_date.date'=>'La data non è inserita in un formato valido',

                'type.required'=>'Il tipo è obbligatorio',
                'type.min'=>'La serie è troppo corto, deve essere almeno 1 carattere',
                'type.max'=>'La serie è troppo lungo, deve essere al massimo 32 caratteri',

                'artists.required'=>"Gli artisti sono obbligatori",
                'writers.required'=>"Gli scrittori sono obbligatori",

            ]
            

        );
        
        $comic = Comic::find($id);
        $formData = $request->all();

        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->thumb = $formData['thumb'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->sale_date =date('Y-m-d',strtotime($formData['sale_date']) );
        $comic->type = $formData['type'];
        $comic->artists = json_encode(explode(',', $formData['artists']));
        $comic->writers = json_encode(explode(',', $formData['writers']));
        $comic->save();
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        
        $comic->delete();

        return redirect()->route('home.index');
    }
}
