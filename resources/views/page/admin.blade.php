@extends('layout.main')
@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add New Admin</h5>
                @include('layout.message')
                <form action="{{route('admin.store')}}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputNameAdd" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" id="inputNameAdd">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNameAdd" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputNameAdd">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNameTest" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <select class="form-select col-sm-10" aria-label="Default select example" name="position">
                                @foreach ($positions as $item)
                                <option value="{{$item->id}}">{{$item->position}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@isset($data)

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Admins</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Position</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key=>$value)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$value->username}}</td>
                            <td>{{$value->position->position}}</td>
                            <td>{{$value->created_at}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <form action="{{route('admin.destroy',$value->id)}}" method="post">@csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endisset
@endsection