<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    /* public function getAllPost() {
        try {
            $response = Http::get('https://jsonplaceholder.typicodedd.com/posts');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        return $response->json();
    } */

    public function getAllPost() {
        try {
            // URL corregida
            $response = Http::get('https://jsonplaceholder.typicode.com/posts');
    
            // Verificar si la solicitud fue exitosa
            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch posts'], $response->status());
            }
        } catch (\Throwable $th) {
            // Capturar cualquier excepción y devolver un mensaje de error
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
    
    public function getPostById($id) {
        try {
            $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);

            if ($id == 3) throw new \Exception('id: ' . $id . '. Is not available.');
            
            if ($post->successful()) {
                return $post->json();
            } else {
                return response()->json(['error1' => 'Failed to fetch posts'], $post->status());
            }
        } catch (\Throwable $th) {
            return response()->json(['error2' => $th->getMessage()], 500);
        }
    }

    public function addPost() {

        try {
            $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
                'userId' => 1,
                'title' => 'New Post Title',
                'body' => 'New Post Description and more description'
            ]);
            
            if ($post->successful()) {
                return $post->json();
            } else {
                return response()->json(['error1' => 'Failed to fetch posts'], $post->status());
            }
        } catch (\Throwable $th) {
            return response()->json(['error2' => $th->getMessage()], 500);
        }
    }

    public function updatePost() {
        try {
            $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
                'title' => 'New Updated Title',
                'body' => 'New Updated Description and more updated description'
            ]);

            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch posts'], $response->status());
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function deletePost($id) {
        try {
            $response = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);

            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch posts'], $response->status());
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}
