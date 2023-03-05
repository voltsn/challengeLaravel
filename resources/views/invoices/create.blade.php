@extends('layout.app')

@section('title', 'Gestionnaire clients - factures | Creer nouvelle facture')

@section('content')
    <div class="flex flex-col justify-center m-auto my-8 w-5/6 max-w-3xl">
        <h2  class="text-3xl bg-slate-200 p-3 mb-8">Créer une facture</h2>
        @if (session('status'))
            <p class=" text-center mb-4 bg-green-300 py-5">{{ session('status') }}</p>
        @endif
        <form action="/invoices/create" method="POST">
            @csrf
            <div>
                @if ($errors->has('client'))
                    <input class="border-red-400" type="text" name="client" placeholder="Client">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('client') }}</p>
                @else
                    <input type="text" name="client" placeholder="Client">
                @endif
            </div>

            <div>
                @if ($errors->has('ref'))
                    <input class="border-red-400" type="text" name="ref" placeholder="Référence">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('ref') }}</p>
                @else
                    <input type="text" name="ref" placeholder="Référence">
                @endif
            </div>

            <div>
                @if ($errors->has('title'))
                    <input class="border-red-400" type="title" name="title" placeholder="Titre">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('title') }}</p>
                @else 
                     <input type="title" name="title" placeholder="Titre">
                @endif
            </div>

            <div>
                @if ($errors->has('goal'))
                    <input class="border-red-400" type="text" name="goal" placeholder="Raison">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('goal') }}</p>
                @else
                    <input type="text" name="goal" placeholder="Raison">
                @endif
            </div>

            <div>
                @if ($errors->has('tva'))
                    <input class="border-red-400" type="number" name="tva" placeholder="tva">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('tva') }}</p>
                @else 
                    <input type="number" name="tva" placeholder="tva">
                @endif
            </div>

            <div>
                @if ($errors->has('amount'))
                    <input class="border-red-400" type="number" name="amount" placeholder="Montant">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('amount') }}</p>
                @else
                    <input type="number" name="amount" placeholder="Montant">
                @endif
            </div>

            <input type="submit" value="Créer une nouvelle facture">
        </form>
    </div>
@endsection
