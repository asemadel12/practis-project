@extends('layouts.layout-main')
@section('page-title', 'رفع الأصناف')
@section('content')

<section @if(!session('success')) style="visibility: hidden;" @endif class="mt-5 container">
    <span class="alert alert-success">
        {{ session('success') }}
    </span>
</section>

<section class="bg-light rounded p-4 d-flex justify-content-center container mt-5">
    <form method="post" action="{{ route('add-new-stock') }}" class="w-50">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">اسم الصنف</label>
            <input type="text" value="{{ old('stock-id') }}" class="form-control" name="stock-id" id="stock-id" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">@error('stock-id') {{ $message }} @enderror</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">وصف الصنف</label>
            <input type="text" value="{{ old('description') }}" class="form-control" id="description" name="description">
            <div id="emailHelp" class="form-text">@error('description') {{ $message }} @enderror</div>
        </div>
        <button type="submit" class="btn btn-primary">حفظ</button>
    </form>
</section>
@endsection