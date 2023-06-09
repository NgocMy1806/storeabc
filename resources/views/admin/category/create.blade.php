@extends('admin.layout.layout')
@section ('content')
<div class="col-md-12">
    <div class="card">
        <form action="{{ isset ($category)?route('categories.update',$category->id) : route('categories.store') }}" method="post">
            @csrf
            @if(isset($category))
               @method ('put')
            @endif
            <div class="card-header">
                <h1 class="card-title">Add New Category</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Category name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$category->name??''}}">
                </div>
                {{-- <div class="mb-3">
                    <label for="slug" class="form-label">Slug:</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{$category->slug??''}}">
                </div> --}}
                <div class="form-check">
                    <input name="status" class="form-check-input" type="checkbox" id="status" {{ isset($category->status)&&$category->status == 1 ? 'checked':''}}>
                    <label class="form-label" for="status">
                        Is active
                    </label>
                </div>
                <div class="form-group">
                    <label>Select parent category</label>
                  <select class="form-control select2" style="width: 100%;" name="parent_id">
                    <option value=0>Select parent category</option>
                    @foreach($parentCategories as $parent)
                    <option value="{{$parent->id}}" {{isset($category)&&$parent->id===$category->parent_id?'selected':''}}>{{$parent->name}}</option>
                    {{-- cách của thầy: <option value="{{$parentCategory->id}}" {{$category->parent_id==$parentCategory->id?'selected':''}}>{{$parentCategory->name}}</option --}}
                    @endforeach
                  </select>
                  </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" href="{{route('categories.index')}}">back</button>
            </div>
        </form>
        
    </div>
</div>
@endsection

@push('custom-js')
<script>
    $('.select2').select2()
</script>

@endpush