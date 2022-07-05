<?php

namespace App\Http\Controllers;

use App\Http\Requests\PoemRequest;
use App\Http\Resources\PoemResource;
use App\Models\Poem;
use Illuminate\Http\Request;

class PoemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PoemResource::collection(Poem::get(['poet', 'id', "verses"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $poem = Poem::create($request);

        // return new Poem($poem);
        $newPoem = new Poem;
        $newPoem->poet = $request->poem['poet'];
        $newPoem->reviewed = $request->poem['reviewed'];
        $newPoem->tags = $request->poem['tags'];
        // $newPoem->verses = $request->poem['verses'];
        $newPoem->save();
        return $newPoem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingPoem = Poem::find($id);

        if ($existingPoem) {
            $existingPoem->reviewed = $request->poem['reviewed'];
            $existingPoem->tags = $request->poem['tags'];
            // $existingPoem->verses = $request->poem['verses'];
            $existingPoem->save();

            return $existingPoem;
        }
        return 'Not found';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingPoem = Poem::find($id);

        if ($existingPoem) {
            $existingPoem->delete();
            return "Deleted";
        }
        return "Not Found";
    }
}
