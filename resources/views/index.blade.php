@extends('layout.app')

@section('title', 'Gestionnaire Client - Factures | Acceuil')

@section('content')
    <div class="flex items-center justify-around flex-wrap mt-24">
        <div class="text-center pb-8 px-8">
            <h2 class="text-2xl mb-5">Clients</h2>
            <img class="w-96 mb-5" alt="three people making a deal" src="{{ asset('images/pexels-kampus-production-8439691.jpg') }}">
            
            <ul>
                <li class="mb-4">
                    <a class="text-red-800" href="./clients">Afficher tous les clients</a>
                </li>
                <li>
                    <a class="text-red-800" href="./clients/create">Creer un client </a>
                </li>
            </ul>
        </div>
        <div class="text-center pb-8 px-8">
            <h2 class="text-2xl mb-5">Factures</h2>
            <img class="w-96 mb-5"alt="person holding an invoice" src="{{ asset('images/pexels-kindel-media-7688187.jpg') }}">
            
            <ul>
                <li class="mb-4">
                    <a class="text-red-800" href="./invoices">Afficher tous les factures</a>
                </li>
                <li>
                    <a class="text-red-800" href="./invoices/create">Creer une facture</a>
                </li>
            </ul>
        </div>
    </div>
@endsection