@extends('index')


@section('main_section')

    <div class="container">
        <table class="table table-bordered table-dark">
            <tr>@foreach($customers as $customer)
                    <td>
                        {{$customer->id}}
                    </td>
                    <td>
                        {{$customer->name}}
                    </td>
                    <td>
                        @if($customer->status==1)
                            Active
                        @else
                            Inactive
                        @endif
                    </td>

                    <td>
                        @foreach($company as $companies)
                            {{$companies->name}}
                            @endforeach
                    </td>
            </tr>

            @endforeach
        </table>
    </div>


    @endsection
