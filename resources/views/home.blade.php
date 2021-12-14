@extends('layouts.app')

@section('main')
    <div class="d-flex gap-3 place-items-center mb-3 ">
        <h1 class="fs-1  align-items-center ">Companies</h1>
        <div>
            <form class="d-flex">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                    Add
                </button>
            </form>
        </div>
    </div>
    <div class="d-flex gap-3 flex-wrap">
        @foreach ($companies as $company)
            <x-company :company="$company"/>
        @endforeach
    </div>
@endsection