@extends('layouts.app')

@section('main')
    <div class="d-flex gap-3 place-items-center mb-3 ">
        <h1 class="fs-1  align-items-center ">Companies</h1>
        <div>
            <form class="d-flex">
                <button class="btn btn-outline-success" type="submit">Add</button>
            </form>
        </div>
    </div>
    <div class="d-flex gap-3 flex-wrap">
        <x-company/>
         <x-company/>
    </div>
@endsection