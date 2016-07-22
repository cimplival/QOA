<aside id="aside" class="app-aside hidden-xs bg-light">
    <div class="aside-wrap">
        <div class="navi-wrap">
            <!-- nav -->
            <nav ui-nav class="navi clearfix">
                <ul class="nav">
                    <li class="padder m-t m-b-sm text-muted">
                        <button class="btn m-b-xs btn-info btn-addon" data-toggle="modal" data-target=".search-candidate">
                        <i class="fa fa-search"></i> Search Candidate
                        </button>
                    </li>
                    <li>
                        <a href="{{ route('catechist') }}">
                            <span class="pull-right text-muted">
                            </span>
                            <i class="fa fa-home"></i>
                            <span class="">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('baptism') }}">
                            <span class="pull-right text-muted">
                            </span>
                            <i class="fa fa-file-text-o"></i>
                            <span class="">Baptism</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="pull-right text-muted">
                            </span>
                            <i class="fa fa-users"></i>
                            <span class="">Holy Communion</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="pull-right text-muted">
                            </span>
                            <i class="fa fa-check"></i>
                            <span class="">Confirmation</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="pull-right text-muted">
                            </span>
                            <i class="fa fa-copy"></i>
                            <span class="">Matrimony</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="pull-right text-muted">
                            </span>
                            <i class="fa fa-list-alt"></i>
                            <span class="">Death</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- nav -->
        </div>
    </div>
</aside>
<div class="modal fade search-candidate" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 b-r">
                        <h4 class="m-t-none m-b font-thin"><i class="fa fa-user"></i> Search for a candidate below: <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                        {!! Form::open(array('route' => 'search')) !!}
                        <div class="form-group">
                            <div class="input-group m-b">
                                <input type="text" class="form-control rounded" placeholder="Search here..." required>
                                <span class="input-group-btn">
                                    <button class="btn btn-info rounded" type="submit"><i class="fa fa-search"></i> Search</button>
                                </span>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        </div><!-- /. modal dialog -->
        </div><!-- /. modal-->