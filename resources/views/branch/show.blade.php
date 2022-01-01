@extends('layout.app')

@section('content')

@livewire('branch.show', [
    'gym' => $gym,
])

@endsection
