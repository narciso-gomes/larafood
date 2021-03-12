@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Dashboard</h1>
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            #filtros
        </div>

        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th style="width: 50px">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->price }}</td>
                            <td><a href="" class="btn btn-success"></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
