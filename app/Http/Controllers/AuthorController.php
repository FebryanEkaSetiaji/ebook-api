<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::get();
        if ($author && $author->count() > 0) {
            return response(["message" => "Show data success.", $author]);
        } else {
            return response(["message" => "Data not found.", $author]);
        }
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
        $author = Author::create([
            "name" => $request->name,
            "date_of_birth" => $request->date_of_birth,
            "place_of_birth" => $request->place_of_birth,
            "gender" => $request->gender,
            "email" => $request->email,
            "hp" => $request->hp,
        ]);

        return response(["message" => "Create data success.", $author]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::find($id);
        if ($author && $author->count() > 0) {
            return response(["message" => "Show data success.", $author]);
        } else {
            return response(["message" => "Data not found.", $author]);
        }
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
        $author = Author::find($id);
        $author->name = $request->name;
        $author->date_of_birth = $request->date_of_birth;
        $author->place_of_birth = $request->place_of_birth;
        $author->gender = $request->gender;
        $author->email = $request->email;
        $author->hp = $request->hp;
        $author->save();

        if ($author && $author->count() > 0) {
            return response(["message" => "Update data success.", $author]);
        } else {
            return response(["message" => "Data not found.", $author]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id);
        if ($author && $author->count() > 0) {
            return $author->delete() . response(["message" => "Delete data success."]);
        } else {
            return response(["message" => "Data not found."]);
        }
    }
}
