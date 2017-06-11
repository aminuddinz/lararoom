@include('layouts.app')
@include('layouts.dropdown-menu')

<div class="col-sm-9 col-md-9 panel panel-default">
    <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Created Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($status as $i=>$stat)
          <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $stat->name }}</td>
            <td>{{ date('j F Y', strtotime($stat->created_at)) }}</td>
            <td>
              <a href="{{ url('/status/edit',$stat->id) }}">Edit</a>
              <a href="{{ url('/status/delete',$stat->id) }}">Delete</a>
            </td>
          <tr>
        @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
