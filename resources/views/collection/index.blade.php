@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card dark:bg-gray-300">
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush