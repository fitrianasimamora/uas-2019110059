@extends('layouts.master')

@section('title', $transaction->kategori)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>{{ $transaction->kategori }}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action={{ route('transactions.destroy', $transaction->id) }} method="POST">
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
                <em>{{ $transaction->kategori }}</em>
            </span>
        </h5>
        <p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <i class="fa fa-th-large fa-fw"></i>
                    <em>{{ $transaction->nominal }}</em>
                </li>
                <li class="list-inline-item">
                    <i class="fa fa-large fa-fw"></i>
                    {{ $transaction->tujuan }}
                </li>
                <li class="list-inline-item">
                    <i class="fa fa-large fa-fw"></i>
                    {{ $transaction->account->id }}
                </li>
            </ul>
            </p>
    </div>
@endsection
