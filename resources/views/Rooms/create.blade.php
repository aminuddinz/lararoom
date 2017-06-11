@include('layouts.app')
@include('layouts.dropdown-menu')

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Room</div>
                <div class="panel-body"><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('RoomsController@store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Room No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="room_no" value="{{ old('name') }}" placeholder="Room No" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price_per_day" class="col-md-4 control-label">Price Per Day</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="price_per_day" value="{{ old('price_per_day') }}" placeholder="RM" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                {{ Form::select('status_id',[''=>'Please Select']+$status,'', ['class'=>'form-control','required'=>'required']) }}
                            </div>
                        </div>
                        <br>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
