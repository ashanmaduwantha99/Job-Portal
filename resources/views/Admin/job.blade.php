@extends('Layouts.adminLayout')

@section('title') Admin - Job @endsection

@section('admin_css')
<style>
    #footer_down{
        margin-bottom: 200px;
    }
</style>
@endsection

@section('js')
@endsection

@section('body')
<div class="container-home">
    <br><br><br><br><br>
    <div class="container">
        <h3><b>S e a c h  -  f r o m : R e g i s t e r e d   U s e r s</b></h3>
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
             <div class="col-md-4">
              <form action="/job_seekers_find" method="POST" role="search">
                        {{ csrf_field() }}
                <div class="form-group row">
                    <label for="item_name" class="col-sm-3 col-form-label" id="label_item_reg" style="color: black">Select Days</label>
                    <div class="col-sm-9">
                        <select name="date" class="form-control">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="item_name" class="col-sm-3 col-form-label" id="label_item_reg" style="color: black">Start time</label>
                    <div class="col-sm-9">
                        <input type="time" class="form-control" name="start_time">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="item_name" class="col-sm-3 col-form-label" id="label_item_reg" style="color: black">End time</label>
                    <div class="col-sm-9">
                        <input type="time" class="form-control" name="end_time">
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
            <div class="col-md-8">
                <div class="row">
                    @if(isset($data))
                        @foreach($data as $row)
                            <div class="col-md-6">
                                <h4><b>Results :</b></h4>
                                <b>Name : {{ $row->name}}</b><br>
                                <b>Email : {{ $row->email}}</b><br>
                                <b>Address : {{ $row->address}}</b><br>
                                <b>Mobile Number : {{ $row->mobile_number}}</b><br>
                                <b>Visa States : {{ $row->visa_states}}</b><br>
                                <b>Transport : {{ $row->transport}}</b><br>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3><b>S e a c h  -  f r o m : A p p l i e d   U s e r s</b></h3>
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-4">
                <form action="/job_seekers_find_applied" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="item_name" class="col-sm-3 col-form-label" id="label_item_reg" style="color: black">Select Days</label>
                        <div class="col-sm-9">
                            <select name="date" class="form-control">
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_name" class="col-sm-3 col-form-label" id="label_item_reg" style="color: black">Start time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" name="start_time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="item_name" class="col-sm-3 col-form-label" id="label_item_reg" style="color: black">End time</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" name="end_time">
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
            <div class="col-md-8">
                <div class="row">
                    @if(isset($data_applied))
                        @foreach($data_applied as $row)
                            <div class="col-md-6">
                                <h4><b>Results :</b></h4>
                                <b>Name : {{ $row->name}}</b><br>
                                <b>Email : {{ $row->email}}</b><br>
                                <b>Address : {{ $row->address}}</b><br>
                                <b>Mobile Number : {{ $row->mobile_number}}</b><br>
                                <b>Visa States : {{ $row->visa_states}}</b><br>
                                <b>Transport : {{ $row->transport}}</b><br>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="footer_down">

</div>
@endsection

