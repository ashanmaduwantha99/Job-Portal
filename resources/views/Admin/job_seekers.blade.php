@extends('Layouts.adminLayout')

@section('title') Adm - Job Seekers @endsection

@section('login_css')

@endsection

@section('js')
@endsection

@section('body')
    <div class="container-home" id="adminLogin">
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3><b>J o b - P o r t a l </b></h3>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
    <div class="container" id="searchStore">
        <div class="row">
            <div class="col-md-3">
                <div class="section-header text-center">
                    <br>
                    <h3 class="title" id="Header"><b>Store Search</b></h3>
                </div>
                <div id="table-wrapper" style="position: relative">
                    <form action="/job_seekers" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="item_name" class="col-sm-3 col-form-label" id="label_item_reg" style="color: black">Search Registers</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input_search_details" name="search" placeholder="Search by Name or code" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary" name="RegWorker">Search</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="reset" class="btn btn-success">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="selling_store">

        @if(isset($details))
            <p> The Search results are :<b> {{ $query }} </b></p>
            <h2>Registered Users - View</h2>
            <hr>
            <table class="table table-striped">
                <thead>
                <tr style="background-color: midnightblue;color: whitesmoke">
                    <th>Name</th>
                    {{--<th>Email</th>--}}
                    {{--<th>Mobile Number</th>--}}
                    {{--<th>Address</th>--}}
                    {{--<th>Visa States</th>--}}
                    {{--<th>Transport</th>--}}
                    <th>Monday From</th>
                    <th>Monday To</th>
                    <th>Tuesday From</th>
                    <th>Tuesday To</th>
                    <th>Wednesday From</th>
                    <th>Wednesday To</th>
                    <th>Thursday From</th>
                    <th>Thursday To</th>
                    <th>Friday From</th>
                    <th>Friday To</th>
                    <th>Saturday From</th>
                    <th>Saturday To</th>
                    <th>Get Info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $row)
                    <tr style="background-color: whitesmoke;color: black">
                        <td>{{$row['name']}}</td>
                        {{--<td>{{$row['email']}}</td>--}}
                        {{--<td>{{$row['mobile_number']}}</td>--}}
                        {{--<td>{{$row['address']}}</td>--}}
                        {{--<td>{{$row['visa_states']}}</td>--}}
                        {{--<td>{{$row['transport']}}</td>--}}
                        <td>{{$row['mon_t_from']}}</td>
                        <td>{{$row['mon_t_to']}}</td>
                        <td>{{$row['tue_t_from']}}</td>
                        <td>{{$row['tue_t_to']}}</td>
                        <td>{{$row['wed_t_from']}}</td>
                        <td>{{$row['wed_t_to']}}</td>
                        <td>{{$row['thu_t_from']}}</td>
                        <td>{{$row['thu_t_to']}}</td>
                        <td>{{$row['fri_t_from']}}</td>
                        <td>{{$row['fri_t_to']}}</td>
                        <td>{{$row['sat_t_from']}}</td>
                        <td>{{$row['sat_t_to']}}</td>
                        <td>
                            <input type="button" name="get_info" value="Info">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

