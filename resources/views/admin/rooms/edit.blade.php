@extends('layouts.admin')

@section('content')
<script>
    function passclick(fileid){
    document.getElementById(fileid).click();
}
function loadimage(e,imageid)
{
    if(e.files[0]){
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(imageid).setAttribute('src',e.target.result) ;
        }
        reader.readAsDataURL(e.files[0]) ;
    }
}
</script>
<div class="container-fluid">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header py-3 d-flex">
            <h1 class="h3 mb-0 text-gray-800">{{ __('create room') }}</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin.rooms.index') }}" class="btn btn-primary">
                        <span class="text">{{ __('Go Back') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="room_number">{{ __('Room Number') }}</label>
                        <input type="text" class="form-control" id="room_number" placeholder="{{ __('room number') }}" name="room_number" value="{{ old('room_number', $room->room_number) }}" />
                    </div>
                    <div class="form-group">
                        <label for="price">{{ __('Price') }}</label>
                        <input type="number" class="form-control" id="price" placeholder="{{ __('price') }}" name="price" value="{{ old('price', $room->price) }}" />
                    </div>
                    <div class="form-group">
                        <label for="capacity">{{ __('Capacity') }}</label>
                        <input type="number" class="form-control" id="capacity" placeholder="{{ __('capacity') }}" name="capacity" value="{{ old('capacity', $room->capacity) }}" />
                    </div>
                    <div class="form-group">
                            <label>photo</label>
                            <input type="text" value="{{$room->photo}}" hidden name="oldphoto"/>
                            <img src="{{ asset('public/img/'.$room->photo) }}" width="150px" height="150px" style="border-radius: 50%; margin-left:10px;" id="fdp_update" onclick="passclick('fdp_update_file')">
                            <input type="file" name="photo" id="fdp_update_file" value="{{$room->photo}}" onchange="loadimage(this,'fdp_update')" class="form-control" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="category">{{ __('Category') }}</label>
                        <select class="form-control" name="category_id" id="category">
                            @foreach($categories as $id => $category)
                                <option {{ $id == $room->category->id ? 'selected' : null }} value="{{ $id }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="floor">{{ __('Floor') }}</label>
                        <input type="number" class="form-control" id="floor" placeholder="{{ __('floor') }}" name="floor" value="{{ old('floor', $room->floor) }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" id="descriptioin" placeholder="description" cols="30" rows="10">{{ old('description', $room->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection