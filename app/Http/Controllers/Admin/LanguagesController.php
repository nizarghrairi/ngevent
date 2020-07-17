<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;

class LanguagesController extends Controller
{
    public function index()
    {
        $languages = Language::select()->paginate(PAGINATION_COUNT);
        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        return view('admin.languages.create');
    }

    public function store(LanguageRequest $request)
    {
        try {
            Language::create($request->except(['_token']));
            return redirect()->route('admin.languages')->with(['success' => 'La langue a été enregistrée avec succès']);
        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'Il y a un problème, veuillez réessayer plus tard']);
        }
    }

    public function edit($id)
    {
        $language = Language::select()->find($id);
        if (!$language) {
            return redirect()->route('admin.languages')->with(['error' => 'Cette langue n\'existe pas']);
        }

        return view('admin.languages.edit', compact('language'));
    }

    public function update($id, LanguageRequest $request)
    {

        try {
            $language = Language::find($id);
            if (!$language) {
                return redirect()->route('admin.languages.edit', $id)->with(['error' => 'Cette langue n\'existe pas']);
            }


            if (!$request->has('active'))
                $request->request->add(['active' => 0]);

            $language->update($request->except('_token'));

            return redirect()->route('admin.languages')->with(['success' => 'La langue a été mise à jour avec succès']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'Il y a un problème, veuillez réessayer plus tard']);
        }
    }

    public function destroy($id)
    {
        try {
            $language = Language::find($id);
            if (!$language) {
                return redirect()->route('admin.languages', $id)->with(['error' => 'Cette langue n\'existe pas']);
            }

            $language->delete();

            return redirect()->route('admin.languages')->with(['success' => 'La langue a été supprimée avec succès']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'Il y a un problème, veuillez réessayer plus tard']);
        }
    }
}
