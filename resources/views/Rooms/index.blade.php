@include('layouts.app')
@include('layouts.dropdown-menu')
<div class="col-sm-9">
  <form class="form-horizontal" method="GET" action="{{url('rooms')}}">
    <div class="col-sm-3">
      <input name="room_no" type="text" placeholder="Search room" class="form-control" />
    </div>
    <div class="col-sm-3">
      {{ Form::select('status_id',[''=>'Please Select']+$status,'', ['class'=>'form-control']) }}
    </div>
    <div class="col-sm-3">
      <input name="price_per_day" type="integer" placeholder="RM" class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>
<br><br><br>
<div class="col-sm-9 col-md-9 panel panel-default">
    <table class="table">
        <thead>
          <th>No</th>
          <th>Room No</th>
          <th>Price Per Day (RM)</th>
          <th>Status</th>
          <th>Created Date</th>
          <th>Action</th>
        </thead>
        <tbody>
        @foreach($rooms as $i=>$room)
        <tr>
          <td>{{ $i+1 }}</td>
          <td>{{ $room->room_no }}</td>
          <td>{{ $room->price_per_day }}</td>
          <td>{{ $room->status->name }}</td>
          <td>{{ date('j F Y', strtotime($room->created_at)) }}</td>
          <td>
            <a href="{{ url('/rooms/edit',$room->id) }}">Edit</a>
            <a href="{{ url('/rooms/delete',$room->id) }}">Delete</a>
          </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
