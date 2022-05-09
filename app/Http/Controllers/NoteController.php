<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Folder;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller {

    public function index(Folder $folder) {
        try{
            $notes = Note::where('folder_id', $folder->id)->get();
            return response($notes, 200);
        } catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];
            return response($response, 400);
        }
    }

    public function store(Request $request, Folder $folder) {
        try{

            $validatedData = $request->validate([
                'title' => ['max:60'],
                'body' => ['required']
            ]);

            $note = new Note();

            $note->fill($request->all());
            $note->folder_id = $request->folder->id;
            // $note = Note::create([
            //     'title' => $validatedData['title'],
            //     'body' => $validatedData['body']
            // ]);
            $note->save();

            return response($note, 201);
        } catch(Exception $ex) {
            $response = [
                'message' => 'This is a bad request'
            ];

            return response($response, 400);
        }
    }

}