<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Client;
use App\Http\Requests\InvoicePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('invoices.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoicePostRequest $request): RedirectResponse
    {
        $request->validated();

        $client_id = NULL;

        try{
          $client = Client::where('name', $request['client'])->firstOrFail();
          $client_id =  $client->id;
        } catch(ModelNotFoundException $e){
            return redirect("/invoices/create")->with('status', 'Le client mentionner n\'existe pas...');
        }

        Invoice::create([
            'client_id' => $client_id,
            'ref' => $request['ref'],
            'title' => $request['title'],
            'tva' => $request['tva'],
            'price' => $request['amount'],
            'goal' => $request['goal'],
        ]);

        return redirect("/invoices/create")->with('status', 'Le Facture été enregistrer avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
