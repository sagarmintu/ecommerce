@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{$category->description}}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked': ''}}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="popular">Popular</label>
                        <input type="checkbox" name="popular" {{$category->popular == '1' ? 'checked': ''}}>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{$category->meta_title}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_keywords">Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" value="{{$category->meta_keywords}}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_descrip">Meta Description</label>
                        <textarea name="meta_descrip" rows="3" class="form-control">{{$category->meta_descrip}}</textarea>
                    </div>
                    @if($category->image)
                        <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="category image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection