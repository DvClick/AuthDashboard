@extends('layout.main')
@section('content')
<style>
    body {
        color: black;
        font-size: 14px
    }

    .tablebody,
    .tdbody,
    .trbody {
        border: 1px black solid !important;
        text-align: center
    }

    .thbody {
        border: 1px black solid !important;
        background-color: #dbdbdb;
        font-weight: normal;
    }
</style>

<form action="{{route('IMS_09_F01.check',$data->id)}}" method="post">
    @csrf
    <div style="width: 7in;height: 9.25in;background-color: white">
        @include('layout.message')

        @include('components.header',['code'=>$code,'name'=>$name])
        <br>
        <div style="margin: 0px 16px">
            <table style="width: 100%" dir="rtl">
                <tbody>
                    <tr>
                        <td style="width: 50%">المحافظة: {{$data->city}}</td>
                        <td style="width: 50%">التاريخ: {{$data->date}}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%">الموقع:{{$data->location}}</td>
                        <td style="width: 50%">العدد: {{$data->amountmain}}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%">القسم:{{$data->department}}</td>
                    </tr>

                </tbody>
            </table>

            <br>
            <table style="width: 100%" id="myTable">
                <thead>
                    <tr class="trbody">
                        <th class="thbody">
                            <p>العدد کتابتا</p>
                        </th>
                        <th class="thbody">
                            <p>العدد رقما</p>
                        </th>
                        <th class="thbody">
                            <p>التفاصل</p>
                        </th>
                        <th class="thbody">
                            <p>المواد او الخدمات</p>
                        </th>
                        <th class="thbody"><strong>ت</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (json_decode($data->table) as $ke=>$item)
                    <tr class="trbody">
                        <td class="tdbody">{{$item->amountstr}}</td>
                        <td class="tdbody">{{$item->amount}}</td>
                        <td class="tdbody">{{$item->detail}}</td>
                        <td class="tdbody">{{$item->service}}</td>
                        <td class="tdbody">{{++$ke}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <table style="width: 100%" dir="rtl">
                <tbody>
                    <tr>
                        <td style="width: 50%">مقدم الطلب: <span class="text-primary">{{$data->admin->name}}</span>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <br>
    <div class="card" style="width: 7in !important">
        <div class="card-body">
            <button class="btn btn-danger" name="type" value="0" style="float: right" type="submit">الغاء</button>
            <button class="btn btn-primary" name="type" value="1" style="float: left" type="submit">موافق</button>
        </div>
    </div>
</form>

@endsection