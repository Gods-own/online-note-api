<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index() {

        try{
            $folders = Folder::all();
            return response($folders, 200);
        } catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];
            return response($response, 400);
        }

    }

    public function store(Request $request) {
        try{
            $validatedData = $request->validate([
                'folder_name' => ['required', 'max:35', 'unique:folders,folder_name']
            ]);

            $folder = Folder::create([
                'folder_name' => $validatedData['folder_name']
            ]);

            return response($folder, 201);

        }catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];

            return response($response, 400);
        }
    }

    public function update(Request $request, Folder $folder) {
        try{
            $validatedData = $request->validate([
            'folder_name' => ['required', 'max:35', 'unique:folders,folder_name']
            ]);

            $folder->update($request->all());

            return response($folder, 204);
        } catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];

            return response($response, 400);
        }

    }
}
