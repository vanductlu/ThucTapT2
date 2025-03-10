@extends('layouts.app')

@section('content')
<div class="content-page">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="#">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="#">Quản lý thể loại</a></li>
                        <li class="breadcrumb-item active">Thêm thể loại</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm thể loại</h4>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form style="margin: 0 auto; width: 300px; font-size: 14px" action="{{ route('categories.store') }}" method="POST">
        @csrf
        <fieldset>
            <label for="category_name">Tên thể loại</label>
            <input style="margin-bottom: 7px" class="form-control" type="text" name="category_name" required />
            @error('category_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </fieldset>

        <fieldset style="padding-top: 20px; text-align: center">
            <button class="btn btn-danger" style="margin-right:10px; width: 70px" type="submit">Add</button>
            <button class="btn btn-danger" style="width: 70px" type="button" onclick="location.href='{{ route('categories.create') }}';">Cancel</button>
        </fieldset>
    </form>
</div>
@endsection
