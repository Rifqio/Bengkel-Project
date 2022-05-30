@extends('mitra.layout.template')
@section('content')
<div class="main-content position-relative max-height-vh-100 h-100">
    {{-- Navbar --}}
    @include('mitra.layout.navbar')
    <div class="container-fluid py-4">
        @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{ session('loginError') }}
        </div>
        @endif
        <form action="{{ url('create-product') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Add Product</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"
                                            class="form-control-label  @error('name') is-invalid @enderror">Name</label>
                                        <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand"
                                            class="form-control-label @error('brand') is-invalid @enderror">Brand</label>
                                        <input class="form-control" name="brand" type="text" value="{{ old('brand') }}">
                                        @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category">
                                            @foreach ($categories as $category)
                                                    <option value={{ $category->id }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price"
                                            class="form-control-label @error('price') is-invalid @enderror">Price</label>
                                        <input class="form-control" id="price" name="price" type="text"
                                            value="{{ old('price') }}">
                                        @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
