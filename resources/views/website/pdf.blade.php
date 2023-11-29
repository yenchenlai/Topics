<style>

    body {
        font-family: Arial, tahoma, sans-serif;
        direction: rtl;
    }

    #main-conetent {
        direction: rtl;
        /*font-family: "vazir";*/
    }

    .qr {
        width: 25%;
        float: left;
    }

    .w-50 {
        width: 47%;
        display: inline-block
    }

    table {
        width: 100%;
    }
    td,th{
        padding: 7px;
    }

    table.table-border {
        border: 3px outset black;
        width: 100%;
        border-spacing: 0;
        text-align: center;
    }

    table.table-border tr:nth-child(even) td, table.table-border tr:nth-child(even) th {
        background: #ddd;
    }

    table.table-border td, table.table-border th {
        border: 1px solid gray;
        padding: 4px;
    }

    .border-x {
        border: 2px solid gray;
        padding: 1em;
        overflow: hidden;
    }

</style>
<div id="main-conetent" class="container mt-5">

    <div style="overflow: hidden">

        <h2 class="pt-4" style="float: right">
            {{config('app.name')}}
        </h2>
        <img src="{{$qr->render(route('invoice.qr',$invoice->hash))}}" alt="qr code" class="qr ">
        <table>
            <tr>
                <td>

                    <b>
                        {{__("Date")}}:
                    </b>
                    {{__($invoice->created_at->jdate('Y/m/d H:i:s'))}}
                </td>
            </tr>
            <tr>
                <td>
                    <b>
                        {{__("Invoice id")}}:
                    </b>
                    {{config('app.invoice_prefix')}}{{$invoice->id}}
                </td>
            </tr>
            <tr>

                <td>
                    <b>
                        {{__("Invoice status")}}:
                    </b>
                    {{__($invoice->status)}}
                </td>
            </tr>
            <tr>
                <td>
                    <b>
                        {{__("Order type")}}:
                    </b>
                    {{__("Online")}}
                </td>
            </tr>
        </table>
    </div>


    <hr>

    @include('component.invoice',$invoice)

    <hr>
    @if($invoice->customer->colleague)
        <div class="border-x">
            <h4>
                فرستنده:
                {{$invoice->customer->name}}
            </h4>
            <h5>
                電話號碼:
                {{$invoice->customer->mobile}}

            </h5>

        </div>
        <br>
        <div class="border-x">
            <h4>
                付款者:
                {{$invoice->desc}}
            </h4>
            <p>
                地址:
                {{$invoice->address_alt}}
            </p>
        </div>
    @else
        <div class="border-x">
            <h4>
                付款者:
                {{$invoice->customer->name}}
            </h4>
            <h5>
                電話號碼:
                {{$invoice->customer->mobile}}
            </h5>
            <p>
                地址:
                {{$invoice->getAddress()}}
            </p>
        </div>
    @endif
</div>
