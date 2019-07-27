<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SwitchLangRequest;

class LanguageController extends Controller
{
    /**
     * @param SwitchLangRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLang(SwitchLangRequest $request)
    {
        if(array_key_exists($request->lang, config('language.languages'))) {
            session(['applocale' => $request->lang]);
        }
        return redirect()->back();
    }
}
