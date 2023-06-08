<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqUpdateRequest;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    protected $faq;

    public function __construct() {
        $this->faq = new Faq;
    }
    public function index()
    {
        session()->put('pagina', 'faq');

        $faqs = faq::paginate(6)->withQueryString();

        return view('livello0.faq')
                ->with('faqs', $faqs);
    }

    public function indexAdmin()
    {
        session()->put('pagina','faq');
        session()->put('url', url()->full());

        $faqs = faq::paginate(6);

        return view('livello3.faq')
                ->with('faqs', $faqs);
    }

    public function create()
    {
        session()->put('pagina','faq');

        return view('livello3/faqAdd');
    }

    public function store(FaqRequest $request)
    {
        $faq = new Faq;
        $faq->fill($request->validated());
        $faq->save();

        session()->flash('status', 'Faq generata correttamente');

        return response()->json(['redirect' => route('admin.faq')]);
    }

    public function edit($idFaq)
    {
        session()->put('pagina','faq');

        $faq = faq::findOrFail($idFaq);
        return view('livello3/faqEdit')
                ->with('faq', $faq);
    }

    public function update(FaqUpdateRequest $request, $idFaq)
    {
        session()->put('pagina','faq');

        faq::findOrFail($idFaq)->update([
            'domanda' => $request->domanda,
            'risposta' => $request->risposta
        ]);

        return redirect()->to(session()->get('url'))->with('status', 'La faq è stata modificata correttamente');
    }

    public function destroy($idFAQ)
    {
        faq::findOrFail($idFAQ)->delete();

        return redirect()->to(session()->get('url'))->with('status', 'La faq è stata eliminata correttamente');
    }
}
