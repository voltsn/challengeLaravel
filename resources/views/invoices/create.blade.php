@extends('layout.app')

@section('title', 'Gestionnaire clients - factures | Creer nouvelle facture')

@section('content')
    <h2>Créer une facture</h2>
    <div>
        <form action="/invoices/create" method="POST">
            @csrf
            <div>
                <input type="text" name="client" placeholder="Client">
                @if ($errors->has('client'))
                    <p>{{ $errors->first('client') }}</p>
                @endif
            </div>

            <div>
                <input type="text" name="ref" placeholder="Référence">
                @if ($errors->has('ref'))
                    <p>{{ $errors->first('ref') }}
                @endif
            </div>

            <div>
                <input type="title" name="title" placeholder="Titre">
                @if ($errors->has("phoneNumber"))
                    <p>{{ $errors->first('phoneNumber') }}</p>
                @endif
            </div>

            <div>
                <input type="text" name="goal" placeholder="Raison">
                @if ($errors->has('goal'))
                    <p>{{ $errors->first('goal') }}</p>
                @endif
            </div>

            <div>
                <input type="number" name="tva" placeholder="tva">
                @if ($errors->has('tva'))
                    <p>{{ $errors->first('tva') }}</p>
                @endif
            </div>

            <div>
                <input type="number" name="amount" placeholder="Montant">
                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>

            <input type="submit" value="Créer une nouvelle facture">
        </form>
    </div>
@endsection