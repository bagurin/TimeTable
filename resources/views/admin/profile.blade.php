
@extends('user.elements.basic')

@section('title')
    登録情報
@endsection

@section('content-header')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header">
            <div class="page-title mrm">
                登録情報</div>
            <div class="page-subtitle">
                {{--ここにサブタイ--}}
            </div>
        </div>
        <hr />

        <form action="{{ url('/admin/profile') }}" class="form-horizontal" method="POST" role="form">
            {{ csrf_field() }}
            <div class="form-body pal">

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">名前</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="{{ old('name',  Auth::guard('admin')->user()->name) }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Eメール</label>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="{{ old('email',  Auth::guard('admin')->user()->email ) }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            保存
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <ol class="breadcrumb page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>&nbsp;<a href="{{ url('/admin/home') }}">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li><a href="{{ url('/admin/profile') }}">登録情報</a>&nbsp;&nbsp;
        </ol>
        <div class="clearfix">
        </div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
@endsection



@section('page-js')
    <script type="text/javascript">

    </script>
@endsection