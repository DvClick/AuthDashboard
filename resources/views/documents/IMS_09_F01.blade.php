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

<form action="{{route('IMS_09_F01.store')}}" method="post">
    @csrf
    <div style="width: 7in;height: 9.25in;background-color: white">
        @include('layout.message')

        @include('components.header',['code'=>$code,'name'=>$name])
        <br>
        <div style="margin: 0px 16px">
            <table style="width: 100%" dir="rtl">
                <tbody>
                    <tr>
                        <td style="width: 50%">المحافظة:
                            <select name="city">
                                @foreach ($city as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select></td>
                        <td style="width: 50%">التاريخ: <input name="date" type="date"></td>
                    </tr>
                    <tr>
                        <td style="width: 50%">الموقع: <input name="location" type="text"></td>
                        <td style="width: 50%">العدد: <input name="amountmain" type="number"></td>
                    </tr>
                    <tr>
                        <td style="width: 50%">القسم: <select name="department">
                                @foreach ($department as $item)
                                <option value="{{$item->title   }}">{{$item->title }}</option>
                                @endforeach
                            </select></td>
                    </tr>

                </tbody>
            </table>

            <br>
            <p class="text-primary" onclick="add()">اضافة سطرة جديدة</p>
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
                    <tr class="trbody">
                        <td class="tdbody"><input name="amountstr[0]" type="text" style="max-width: 100px"></td>
                        <td class="tdbody"><input name="amount[0]" type="number" style="max-width: 100px"></td>
                        <td class="tdbody"><input name="detail[0]" type="text" style="max-width: 100px"></td>
                        <td class="tdbody"><input name="service[0]" type="text" style="max-width: 100px"></td>
                        <td class="tdbody">1</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table style="width: 100%" dir="rtl">
                <tbody>
                    <tr>
                        <td style="width: 50%">مقدم الطلب: <span class="text-primary">{{session()->get('name')}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 100%"><textarea style="width:100%;resize: none;" rows="3"></textarea></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
    <br>
    <div class="card" style="width: 7in !important">
        <div class="card-body">
            <a href="/" class="btn btn-danger" style="float: right" type="submit">الغاء</a>
            <button class="btn btn-primary" style="float: left" type="submit">تقدیم الطلب</button>
        </div>
    </div>
    <script>
        var counter = 1;
    function add() {
       if(counter < 5){
            counter++;
            $('#myTable tr:last').after(
                `<tr class="trbody">
                    <td class="tdbody"><input name="amountstr[`+(counter-1)+`]" type="text" style="max-width: 100px"></td>
                    <td class="tdbody"><input name="amount[`+(counter-1)+`]" type="text" style="max-width: 100px"></td>
                    <td class="tdbody"><input name="detail[`+(counter-1)+`]" type="text" style="max-width: 100px"></td>
                    <td class="tdbody"><input name="service[`+(counter-1)+`]" type="text" style="max-width: 100px"></td>
                    <td class="tdbody">`+counter+`</td>
                </tr>`
            );
       }
    }

    </script>
</form>

@endsection