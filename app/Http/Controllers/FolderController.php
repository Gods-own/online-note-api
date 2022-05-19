<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\FolderResource;

class FolderController extends Controller
{
    public function index() {

        try{
            $user = Auth::user();

            $folders = Folder::where('user_id', $user->id)->get();

            return new FolderResource($folders);

        } catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];
            return response($response, 400);
        }

    }

    public function store(Request $request) {

        try{
            $user = Auth::user();

            $validatedData = $request->validate([
                'folder_name' => ['required', 'max:35', 'unique:folders,folder_name']
            ]);

            $folder = Folder::create([
                'user_id' => $user->id,
                'folder_name' => $validatedData['folder_name']
            ]);

            return new FolderResource($folder);

            // return response($folder, 201);

        }catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];

            return response($response, 400);
        }
    }

    public function update(Request $request, Folder $folder) {
        try{
            $user = Auth::user();

            $validatedData = $request->validate([
            'folder_name' => ['required', 'max:35', 'unique:folders,folder_name']
            ]);

            $folder->where([
                'id' => $folder->id
                ])->update($request->all());

            return new FolderResource($folder);    

            // return response($folder, 204);
        } catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];

            return response($response, 400);
        }

    }

    public function destroy(Folder $folder) {
        try{
            $folder->delete();
            $response = [
                'message' => 'Item deleted'
            ];
            return response($response, 200);
        } catch(Exception $ex) {
            $response = [
                'message' => 'Sorry, something went wrong'
            ];

            return response($response, 400);
        }
    }
}
