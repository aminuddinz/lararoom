<!DOCTYPE html>
<style>
.glyphicon { margin-right:10px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 15px }
.panel-body .table {margin-bottom: 0px; }

.panel-group .panel {
  border-radius: 0px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default nav nav-pills nav-stacked admin-menu">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="1" data-parent="#accordion" href="#collapseOne">Room</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in ">
                        <div class="panel-body">

                            <table class="table">
                                <tr>
                                    <td>
                                        <li {{{ (Request::is('rooms/create') ? 'class=active' : '') }}}><a href="{{url('/rooms/create')}}" data-target-id="1"><i></i>Create New Room</a></li>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li {{{ (Request::is('rooms') ? 'class=active' : '') }}}><a href="{{url('/rooms')}}" data-target-id="2"><i></i>List Room</a></li>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  data-target-id="5" data-parent="#accordion" href="#collapseTwo">Status</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <li {{{ (Request::is('status/create') ? 'class=active' : '') }}}><a href="{{url('/status/create')}}" data-target-id="5"><i></i>Create New Status</a></li>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <li {{{ (Request::is('status') ? 'class=active' : '') }}}><a href="{{url('/status')}}" data-target-id="6"><i></i>List Status</a></li>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
