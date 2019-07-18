@extends('index')
@section('main_section')

    <div class="container pt-5">
        <form action="/addcustom" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name like 'Ringku Islam'" name="name">
                {{$errors->first('name')}}
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
            </div>


            <div class="form-group">
                <label for="">Message</label><br>
                <textarea name=text" class="form-control col-md-6 text-primary" id="" cols="30" rows="10">

                </textarea>
            </div>



            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Send">
            </div>


        </form>

    </div>


@endsection