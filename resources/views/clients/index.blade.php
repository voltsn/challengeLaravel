@extends('layout.app')

@section('title', 'Invoice Manger | Clients')

@section('content')
  <div class="flex flex-col justify-center m-auto mt-8 mb-2 w-5/6 max-w-5xl">
    <div>
      <h2 class="text-3xl bg-slate-200 p-3 mb-3">Mes clients</h2>
      <p>Dans cette section, vous pouvez la liste de tous vos clients</p>
    </div>
    <div class="overflow-x-scroll">
      <table class="main-table table-full w-full mt-8">
        <thead class="font-bold">
          <tr>
            <th>
              #
            </th>
            <th>
              Société
            </th>
            <th>
              Téléphone
            </th>
            <th>
              Email
            </th>
            <th>
              Adresse
            </th>
            <th>
              TVA
            </th>
            <th>
              Factures
            </th>
            <th>
              Opérations
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
          <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->phoneNumber }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->tva }}</td>
            <td></td>
            <td>
              <div class="flex gap-4">
                <a href="#" class="text-red-500 inline-block">Modifier</a>
                <a href="#" class="bg-red-500 text-white inline-block rounded p-2">Supprimer</a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
    </div>
  </div>
@endsection
