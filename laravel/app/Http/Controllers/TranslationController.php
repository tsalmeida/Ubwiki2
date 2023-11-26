<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// You may need to use other classes depending on your logic

class TranslationController extends Controller
{
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'group' => 'required|string',
            'key' => 'required|string',
            'language' => 'required|string',
            'text' => 'required|string',
        ]);

        // Update the translation in the database
        $translation = \Spatie\TranslationLoader\LanguageLine::firstOrNew([
            'group' => $request->group,
            'key' => $request->key,
            'language' => $request->language,
        ]);

        $translation->setTranslation($request->language, $request->text);
        $translation->save();

        // Redirect back or to another page with a success message
        return redirect()->back()->with('success', 'Translation updated successfully.');
    }

