@extends('layouts.master')

@section('title', $account->id)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>{{ $account->id }}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action={{ route('accounts.destroy', $account->id) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h5>
            <span class="badge badge-primary">
                <i class="fa fa-star fa-fw"></i>
                <em>ID : {{ $account->id }}</em>
            </span>
        </h5>
        <p>
            <div>
        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em> {{ $account->nama }}</em>
            </li>
        </div>
            <li class="list-inline-item">
                <i class="fa fa-calendar fa-fw"></i>
                 {{ $account->jenis }}
            </li>
        </ul>
        </p>
    </div>
@endsection
