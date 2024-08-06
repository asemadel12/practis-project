@extends('layouts.layout-main')
<!-- وظيفة الاكستند عشان نسوي انهرتنس من اللياوتس -->
@section('page-title', 'الرئيسية')
@section('content')

    <section class="mt-5 container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @if ($stocks->isEmpty())
                <h2>The Stock is empty</h2>
            @else
                @foreach ($stocks as $stock)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $stock->stock_id }}</h5>
                                <p class="card-text">{{ $stock->description }}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated at {{ $stock->updated_at->format('H:m:s') }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
