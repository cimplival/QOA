@if(count($baptisms)===0)
<h5>Sorry, there are no Sacraments of Baptism.</h5>
@else
@if (Session::has('info-patient'))
<div class="alert alert-info text-center btn-close" role="alert">
  {{ Session::get('info-patient') }}
</div>
@endif
<div class="panel panel-default">
    <div class="panel-heading">
        {!! Form::open(array('route' => 'search-baptism', 'class'=>'form-inline text-right')) !!}
            <div class="form-group">
                <div class="input-group">
                    <input placeholder="Search Appointments" name="search" class="form-control" type="text" required>
                    <div class="input-group-btn"><button class="btn btn-info" type="submit">Search</button></div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-responsive">
            
            <thead>
                <tr>
                    <th style="width:10%">Christian Name</th>
                    <th style="width:20%">Family Name</th>
                    <th style="width:10%">Date of Baptism</th>
                    <th style="width:15%">Name of GodParent</th>
                    <th style="width:10%">Minister</th>
                    <th style="width:15%">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($baptisms->reverse() as $baptism)
                <tr>
                    <td>
                        {{ $baptism->christian_name }}
                    </td>
                    <td>
                        {{ $baptism->family_name }}
                    </td>
                    <td>
                        {{ Carbon\Carbon::parse($baptism->date_of_baptism)->diffForHumans() }}
                    </td>
                    <td>
                        {{ $baptism->minister }}
                    </td>
                    <td class="center">
                        <button class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit</button>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" data-target=".baptism-{{$baptism->id}}">
                            Cancel <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <div class="modal fade baptism-{{$baptism->id}}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info dk">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h5 class="blue bigger">
                                                    <i class="fa fa-times"></i>
                                                Cancel baptism</h5>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12">
                                                        <p>Are you sure you want to <b>Permanently</b> delete this baptism?</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                            {!!Form::open()!!}
                                                        {!! Form::submit('No, Go Back', ['class' => 'btn btn-sm btn-default pull-left', 'data-dismiss' => 'modal']) !!} 
                                                    {!!Form::close()!!}

                                                    {!!Form::open(['method'=>'DELETE','action'=>['Catechist\CatechistController@deleteBaptism',$baptism->id]])!!}
                                                        {!! Form::submit('Yes, Cancel', ['class' => 'btn btn-danger btn-sm pull-right']) !!} 
                                                    {!!Form::close()!!}
                                            </div>
                                        </div>
                            </div><!-- /. modal dialog -->
                    </div><!-- /. modal-->
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="text-center">
            <ul class="pagination"> 
                    {{ $baptisms->links() }}
            </ul>
        </div>
    </div>
    @endif