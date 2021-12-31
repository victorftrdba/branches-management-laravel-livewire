@extends('layout.app')

@section('content')

@livewire('branch.edit', [
    'gym' => $gym,
])

@endsection
