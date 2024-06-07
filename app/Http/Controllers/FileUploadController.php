<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');

            // Vous pouvez enregistrer le chemin du fichier et d'autres détails dans la base de données si nécessaire

            return back()->with('success', 'Fichier téléchargé avec succès.');
        }

        return back()->withErrors(['file' => 'Le fichier n\'a pas pu être téléchargé.']);
    }
}
