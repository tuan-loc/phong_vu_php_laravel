@extends('backend.layouts.master')

@section('main-content')
<div class="card">
    <h5 class="card-header">Edit User</h5>
    <div class="card-body">
        <form method="post" action="{{ route('user.update', ['id' => $user->id]) }}">
            @csrf
            <div class="form-group">
                <label for="inputTitle" class="col-lg-4 col-form-label">User name <span
                        class="text-danger">*</span></label>
                <input id="inputTitle" type="text" name="name" placeholder="Enter name" value="{{ $user->name }}"
                    class="form-control">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputTitle" class="col-lg-4 col-form-label">Email <span class="text-danger">*</span></label>
                <input id="inputTitle" type="email" name="email" placeholder="Enter email" value="{{ $user->email }}"
                    class="form-control">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputPhoto" class="col-form-label">Avatar <span class="text-danger">*</span></label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ $user->photo }}">
                </div>
                <img src="{{$user->photo}}" width="500px" alt="{{$user->name}}">
                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            @php
            $roles=DB::table('users')->select('role')->get();
            @endphp
            <div class="form-group">
                <label for="role" class="col-lg-4 col-form-label">Role <span class="text-danger">*</span></label>
                <select name="role" class="form-control">
                    <option value="">---- Select Role ----</option>
                    @foreach($roles as $role)
                    <option value="{{$role->role}}" {{(($role->role=='admin') ? 'selected' : '')}}>Admin</option>
                    <option value="{{$role->role}}" {{(($role->role=='user') ? 'selected' : '')}}>User</option>
                    @endforeach
                </select>
                @error('role')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                <select name="status" class="form-control">
                    <option value="active" {{(($user->status=='active')? 'selected' : '')}}>Active</option>
                    <option value="inactive" {{(($user->status=='inactive')? 'selected' : '')}}>Inactive</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

<script>
$('#lfm').filemanager('image');
</script>
@endsection
