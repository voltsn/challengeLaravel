@extends('layout.app')

@section('title', 'Gestionnaire clients - factures | Creer nouveau client')

@section('content')
    <div class="flex flex-col justify-center m-auto my-8 w-5/6 max-w-3xl">
        <h2 class="text-3xl bg-slate-200 p-3 mb-8">Ajouter un client</h2>
        <form action="/clients/create" method="POST">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Nom du client">
                @if ($errors->has('name'))
                    <p>{{ $errors->first('name') }}
                @endif
            </div>

            <div>
                <input type="number" name="phoneNumber" placeholder="Numéro de téléphone">
                @if ($errors->has("phoneNumber"))
                    <p>{{ $errors->first('phoneNumber') }}</p>
                @endif
            </div>

            <div>
                <input type="email" name="email" placeholder="Email">
                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div>
                <input type="text" name="address" placeholder="Address">
                @if ($errors->has('address'))
                    <p>{{ $errors->first('address')</p>
                @endif
            </div>

            <div>
                <input type="text" name="tva" placeholder="Numéro de tva">
                @if ($errors->has('tva'))
                    <p>{{ $errors->first('tva')</p>
                @endif
            </div>

            <input type="submit" value="Ajouter le client">
        </form>
    </div>
@endsection