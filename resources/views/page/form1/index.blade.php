@extends('layout.main')
@section('content')

@isset($data)
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">All Documents form 1</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key=>$value)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="{{route('form1.show',$value->id)}}">Show</a></td>
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