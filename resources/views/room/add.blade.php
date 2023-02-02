<div class="accordion" id="add_user_container">
    <div class="card card-default">
        <div class="card-header" id="add_user_header">
            <h5 class="mb-0 py-1" data-toggle="collapse" data-target="#add_user" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-plus"></i> Thêm Mới
            </h5>
            <div class="icon-container">
                <i class="fa fa-chevron-up icon-up d-none"></i>
                <i class="fa fa-chevron-down icon-down"></i>
            </div>
        </div>

        <div id="add_user" class="collapse {{$errors->any() ? 'show' : ''}}" aria-labelledby="add_user_header" data-parent="#add_user_container">
            <div class="card-body">
                <form id="add_user_form" class="row" method="POST" action="">
                    @csrf
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Name <i class="fas fa-solid fa-star-of-life text-info"></i></label>
                            <input type="text" class="form-control" name="firstname" id="first_name"
                                value="{{ old('firstname') }}">
                            @error('firstname')
                                <small class="mess-error text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email">Email <i class="fas fa-solid fa-star-of-life text-info"></i></label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            @error('email')
                                <small class="mess-error text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="col-sm-6">
                        <div class="form-group">
                            <label for="role_id">@lang("nayose.role") <i class="fa-solid fa-star-of-life text-info"></i></label>
                            <select data-container="body"  data-container="body" name="role_id" id="role_id" class="form-control selectpicker" onchange="changeRole()">
                                <option value="">-- @lang('nayose.please_choose') --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div> --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Mật khẩu <i class="fas fa-solid fa-star-of-life text-info"></i></label>
                            <input type="text" class="form-control" name="firstname" id="first_name"
                                value="{{ old('firstname') }}">
                            @error('firstname')
                                <small class="mess-error text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="first_name">Nhập lại mật khẩu <i class="fas fa-solid fa-star-of-life text-info"></i></label>
                            <input type="text" class="form-control" name="firstname" id="first_name"
                                value="{{ old('firstname') }}">
                            @error('firstname')
                                <small class="mess-error text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-12 mt-2">
                        <button class="btn btn-info">@lang("nayose.register")</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
