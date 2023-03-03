@extends('layout.app')

@section('title', 'Gestionnaire clients - factures | Creer nouveau client')

@section('content')
    <div class="flex flex-col justify-center m-auto my-8 w-5/6 max-w-3xl">
        <h2 class="text-3xl bg-slate-200 p-3 mb-8">Ajouter un client</h2>
        @if (session('status'))
            <p class="text-center mb-5 bg-green-400 py-5" >{{ session('status') }}</p>
        @endif
        <form action="/clients/create" method="POST">
            @csrf
            <div>
                @if ($errors->has('name'))
                    <input class="border-red-400" type="text" name="name" placeholder="Nom du client">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('name') }}
                @else
                    <input  type="text" name="name" placeholder="Nom du client">
                @endif
            </div>

            <div>
                @if ($errors->has("phoneNumber"))
                    <input class="border-red-400" type="number" name="phoneNumber" placeholder="Numéro de téléphone">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('phoneNumber') }}</p>
                @else
                     <input type="number" name="phoneNumber" placeholder="Numéro de téléphone">
                @endif
            </div>

            <div>
                @if ($errors->has('email'))
                    <input class="border-red-400" type="email" name="email" placeholder="Email">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('email') }}</p>
                @else 
                    <input type="email" name="email" placeholder="Email">
                @endif
            </div>

            <div>
                @if ($errors->has('address'))
                    <input class="border-red-400" type="text" name="address" placeholder="Address">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('address') }}</p>
                @else
                    <input type="text" name="address" placeholder="Address">
                @endif
            </div>

            <div>
                @if ($errors->has('tva'))
                    <input class="border-red-400" type="text" name="tva" placeholder="Numéro de tva">
                    <p class="text-sm text-red-500 p-2">{{ $errors->first('tva') }}</p>
                @else
                    <input type="text" name="tva" placeholder="Numéro de tva">
                @endif
            </div>

            <input type="submit" value="Ajouter le client">
        </form>
    </div>
@endsection