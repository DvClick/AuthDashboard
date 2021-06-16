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
<div style="width: 7in;height: 9.25in;background-color: white">
    @include('components.header')
    <br>
    <div style="margin: 0px 16px">
        <table style="width: 100%" dir="rtl">
            <tbody>
                <tr>
                    <td style="width: 50%">العدد:</td>
                    <td style="width: 50%">التاريخ:</td>
                </tr>
                <tr>
                    <td style="width: 50%">القسم/ الشعبة/ </td>
                    <td style="width: 50%"></td>
                </tr>
                <tr>
                    <td style="width: 50%">السيد منسق النظام الإدارة المتكامل نقترح(تعديل ) الوثيقة:</td>
                    <td style="width: 50%"></td>
                </tr>
                <tr>
                    <td style="width: 50%">أسم الوثيقة: </td>
                    <td style="width: 50%"></td>
                </tr>
                <tr>
                    <td style="width: 50%">رمز الوثيقة : </td>
                    <td style="width: 50%"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="tablebody" style="width: 100%" dir="rtl">
            <tbody>
                <thead>
                    <tr class="hbody">
                        <th class="thbody">اصدار Issue</th>
                        <th class="thbody">الغاءCancel</th>
                        <th class="thbody">تعديلRevise</th>
                    </tr>
                </thead>
                <tr class="trbody">
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%">
            <thead>
                <tr class="trbody">
                    <th class="thbody">
                        <p>الاسباب الموجبة<br>Reasons</p>
                    </th>
                    <th class="thbody">
                        <p>النص المقترح<br>Proposed text</p>
                    </th>
                    <th class="thbody">
                        <p>النص الحالي<br>Current text</p>
                    </th>
                    <th class="thbody">
                        <p>الفقرة/ السطر<br>Paragraph/line</p>
                    </th>
                    <th class="thbody"><strong>ت</strong></th>
                </tr>
            </thead>
            <tbody>

                <tr class="trbody">

                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">1</td>
                </tr>
                <tr class="trbody">

                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">&nbsp;</td>
                    <td class="tdbody">2</td>
                </tr>
            </tbody>
        </table>
        <br>
        <table style="width: 100%" dir="rtl">
            <tbody>
                <tr>
                    <td style="width: 50%">رئيس القسم</td>
                    <td style="width: 50%">تأييد منسق نظام الإدارة المتكامل</td>
                </tr>
                <tr>
                    <td style="width: 50%">التوقيع / </td>
                    <td style="width: 50%">التوقيع / </td>
                </tr>
                <tr>
                    <td style="width: 50%">الاسم /</td>
                    <td style="width: 50%">الاسم /</td>
                </tr>
                <tr>
                    <td style="width: 50%">التأريخ /</td>
                    <td style="width: 50%">التأريخ /</td>
                </tr>

            </tbody>
        </table>
        <br>
        <table class="tablebody" style="width: 100%" dir="rtl">
            <tbody>
                <tr>
                    <td style="width: 50%;text-align: right">الفعل المقترح:</td>
                    <td style="width: 50%;text-align: left">:Proposed action</td>
                </tr>
                <tr>
                    <td style="width: 50%;text-align: right"><br><br><br><br></td>
                    <td style="width: 50%;text-align: left"><br><br><br><br></td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="width: 100%" dir="rtl">
            <tbody>
                <tr>
                    <td style="width: 50%;text-align: right"></td>
                    <td style="width: 50%;text-align: left">مصادقة المدير المفوض</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection