<style>
    .tableHeader,
    .tdHeader,
    .trHeader {
        border: 3px black double !important;
    }
</style>
<table class="tableHeader" style="width: 100%;">
    <tbody>
        <tr class="trHeader">
            <td class="tdHeader">&nbsp;</td>
            <td class="tdHeader" rowspan="3">
                <center><img alt="TS_EN" src="{{asset('logo.png')}}" style="height:75px" /></center>
            </td>
            <td class="tdHeader" colspan="2" rowspan="2">
                <center>
                    <p>{{$name}}</p>
                </center>
            </td>
            <td class="tdHeader">
                <center>
                    <p>Issue: 02<br>10/09/2019</p>
                </center>
            </td>

            <td class="tdHeader">&nbsp;</td>

        </tr>
        <tr class="trHeader">
            <td class="tdHeader">&nbsp;</td>
            <td class="tdHeader" rowspan="2">
                <center>
                    <p>Revision: 00<br>10/09/2019</p>
                </center>
            </td>
        </tr>
        <tr class="trHeader">
            <td class="tdHeader">&nbsp;</td>
            <td class="tdHeader" colspan="2">
                <center>{{$code}}</center>
            </td>
            <td class="tdHeader">&nbsp;</td>

        </tr>
        <tr class="trHeader">
            <td class="tdHeader">&nbsp;</td>
            <td class="tdHeader">
                <center>ISO 9001:2015</center>
            </td>
            <td class="tdHeader">
                <center>ISO 18788:2015</center>
            </td>
            <td class="tdHeader">
                <center>ISO 14001:2015</center>
            </td>
            <td class="tdHeader">
                <center>ISO 45001:2018</center>
            </td>
            <td class="tdHeader">&nbsp;</td>
        </tr>
    </tbody>
</table>