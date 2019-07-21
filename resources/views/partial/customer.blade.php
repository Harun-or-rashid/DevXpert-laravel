@extends('index')


@section('main_section')

    <div class="container">
        <table class="table table-bordered table-dark">
            <th>SL</th>
            <th>Name</th>
            <th>Status</th>
            <th>Company</th>



                <tr>
                    <?php $i=1; ?>{{--  For maintainig serial of customer list--}}

                @foreach($customers as $customer)
                    <td>

                        {{$i}}

                      <?php $i++; ?>
                    </td>
                    <td>
                        <a href="/customer/{{$customer->id}}">{{$customer->name}}</a>
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
