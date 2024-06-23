<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Database;
use App\Services\DatabaseService;
use App\Http\Requests\StoreDatabaseRequest;


class Database2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databases = Database::select('id', 'name', 'title', 'created_at')->get();

        return view('databases.index', compact('databases'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('databases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDatabaseRequest $request)
    {
        // dd($request);
        
        Database::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'url' => $request->url,
            'gender' => $request->gender,
            'age' => $request->age,
            'message' => $request->message,
        ]);
        // 保存したらどこのページに飛ばすか
        return to_route('databases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $database = Database::find($id);

        // 性別
        $gender = DatabaseService::checkGender($database);
        
        // 年齢層
        $age = DatabaseService::checkAge($database);

        return view('databases.show', compact('database', 'gender', 'age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $database = Database::find($id);
        return view('databases.edit', compact('database'));
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
        $database = Database::find($id);
        $database->name = $request->name;
        $database->title = $request->title;
        $database->email = $request->email;
        $database->url = $request->url;
        $database->gender = $request->gender;
        $database->age = $request->age;
        $database->message = $request->message;
        $database->save();
        return to_route('databases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $database = Database::find($id);

        $database->delete();

        return to_route('databases.index');
    }
}
