@extends('Layouts.registersLayout')

@section('title') Registered Users Home @endsection

@section('reg_css')

@endsection

@section('js')
@endsection

@section('body')
    <div class="container-home" id="adminLogin">
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <h3>Hi..<b>{{$username}}</b></h3>
                <h3><b>You can edit your details from here..</b></h3><br>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <hr>
                <div class="col-md-6">
                    <h3><b>You can change your Basic Details from here..</b></h3><br>
                    @foreach($reg_user_details as $row)
                        <form action="/regFormUpdate" method="post" role="form" class="contactForm" name="myForm">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <input type="text" name="id" class="hidden" placeholder="Your Name" value="{{$row['id']}}" required>
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{$row['name']}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{$row['email']}}" ng-model="myInput" placeholder="Your Email" required>
                                    {{--<span style="color:red" ng-show="myForm.email.$invalid">--}}
                                    {{--<span ng-show="myForm.email.$error.email">Invalid email address.</span>--}}
                                    {{--</span>--}}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="mobile_number" value="{{$row['mobile_number']}}" class="form-control" placeholder="Mobile Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="visa_states" class="form-control" value="{{$row['visa_states']}}" name="visa_states" placeholder="Visa States">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="address" value="{{$row['address']}}" placeholder=" Your Address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="transport" value="{{$row['transport']}}" placeholder="Trasnport">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-primary">Clear</button>
                            </div>
                        </form>
                    @endforeach
                    <hr>
                    <h3><b>You can change your Username from here..</b></h3><br>
                    @foreach($reg_user_details as $row)
                        <form action="/regFormUpdateUsername" method="post" role="form" class="contactForm" name="myForm">
                            {{ csrf_field() }}
                            <input type="text" name="id" class="hidden" placeholder="Your Name" value="{{$row['id']}}" required>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" name="username" class="form-control" value="{{$row['username']}}" id="name" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Username</button>
                                <button type="reset" class="btn btn-primary">Clear</button>
                            </div>
                        </form>
                    @endforeach
                </div>
                <div class="col-md-6">
                    <h3><b>You can change your Basic Details from here..</b></h3><br>
                    @foreach($reg_user_details as $row)
                        <form action="/regFormUpdateTime" method="post" role="form" class="contactForm" name="myForm">
                            {{ csrf_field() }}
                            <input type="text" name="id" class="hidden" placeholder="Your Name" value="{{$row['id']}}" required>
                            <h5><b>working days</b></h5>
                            <div class="row">
                                <div class="col-md-4"><b>Day</b></div>
                                <div class="col-md-4"><b>From</b></div>
                                <div class="col-md-4"><b>To</b></div>
                                <hr>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="monday">Monday</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="mon_t_from" value="{{$row['mon_t_from']}}" class="form-control" placeholder="From">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="mon_t_to" value="{{$row['mon_t_to']}}" class="form-control" placeholder="To">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="monday">Tuesday</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="tue_t_from" value="{{$row['tue_t_from']}}" class="form-control" placeholder="From">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="tue_t_to" value="{{$row['tue_t_to']}}" class="form-control" placeholder="To">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="monday">Wednesday</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="wed_t_from" value="{{$row['wed_t_from']}}" class="form-control" placeholder="From">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="wed_t_to" value="{{$row['wed_t_to']}}" class="form-control" placeholder="To">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="monday">Thursday</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="thu_t_from" value="{{$row['thu_t_from']}}" class="form-control" placeholder="From">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="thu_t_to" value="{{$row['thu_t_to']}}" class="form-control" placeholder="To">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="monday">Friday</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="fri_t_from" value="{{$row['fri_t_from']}}" class="form-control" placeholder="From">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="fri_t_to" value="{{$row['fri_t_to']}}" class="form-control" placeholder="To">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="monday">Saturday</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="sat_t_from" value="{{$row['sat_t_from']}}" class="form-control" placeholder="From">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="time" name="sat_t_to" value="{{$row['sat_t_to']}}" class="form-control" placeholder="To">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="reset" class="btn btn-primary">Clear</button>
                            </div>
                        </form>
                    @endforeach
                    <hr>
                    <h3><b>You can change your Password from here..</b></h3><br>
                    @foreach($reg_user_details as $row)
                        <form action="/regFormUpdatePassword" method="post" role="form" class="contactForm" name="myForm">
                            {{ csrf_field() }}
                            <input type="text" name="id" class="hidden" placeholder="Your Name" value="{{$row['id']}}" required>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Password</button>
                                <button type="reset" class="btn btn-primary">Clear</button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
