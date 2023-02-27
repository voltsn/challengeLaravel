@extends('layout.app')

@section('title', 'Gestionnaire Client - Factures | Acceuil')

@section('content')
    <div>
        <h2>Clients</h2>
        <img alt="blank" src>
        
        <a href="./clients">Afficher tous les clients</a>
        <a href="./clients/create">Creer un client </a>
    </div>
    <div>
        <h2>Factures</h2>
        <img alt="blank" src>
        
        <a href="./invoices">Afficher tous les factures</a>
        <a href="./invoices/create">Creer une facture</a>
    </div>
@endsection