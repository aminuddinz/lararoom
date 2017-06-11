@include('layouts.app')
@include('layouts.dropdown-menu')

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Status</div>
                <div class="panel-body"><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ action('StatusController@show',null) }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Status" required autofocus>
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
