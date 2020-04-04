
@extends('layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      @lang('site.homes')      </h1>
      <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">@lang('site.homes')</li>
            </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

         
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">@lang('site.homes')</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             

              <strong><i class="fa fa-map-marker margin-r-5"></i> @lang('site.address')</strong>

              <p class="text-muted">{{$homes->address}}</p>

              <hr>
              <strong><i class="fa fa-phone margin-r-5"></i> @lang('site.phone')</strong>

              <p class="text-muted">{{$homes->phone}}</p>

              <hr>
             
              <strong><i class="fa fa-envelope margin-r-5"></i> @lang('site.email')</strong>

              <p class="text-muted">{{$homes->mail}}</p>
              <hr>
              <strong><i class="fa fa-facebook margin-r-5"></i> @lang('site.facebooklink')</strong>

              <p class="text-muted">{{$homes->facebooklink}}</p>

             <hr>
             <strong><i class="fa fa-twitter margin-r-5"></i> @lang('site.twitterlink')</strong>

             <p class="text-muted">{{$homes->twitterlink}}</p>

             <hr>
             <strong><i class="fa fa-linkedin margin-r-5"></i>@lang('site.linkedenlink')</strong>

              <p class="text-muted">{{$homes->linkedenlink}}</p>

              <hr> 
              <strong><i class="fa fa-google-plus margin-r-5"></i> @lang('site.googlepluslink')</strong>

              <p class="text-muted">{{$homes->googlepluslink}}</p>

              <hr>
              <strong><i class="fa fa-user margin-r-5"></i> @lang('site.clients')</strong>

              <p class="text-muted">{{$homes->clients}}</p>

              <hr>
              <strong><i class="fa fa-folder-open margin-r-5"></i> @lang('site.activeproject')</strong>

              <p class="text-muted">{{$homes->activeproject}}</p>

              <hr>
              
              <strong><i class="fa fa-folder margin-r-5"></i> @lang('site.complateproject')</strong>

              <p class="text-muted">{{$homes->completedproject}}</p>

              <hr>

           </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">@lang('site.edit_settings')</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              @include('partials._errors')
                 
              <form action="{{ route('dashboard.homes.update', $homes->id) }}" method="post">

                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label>@lang('site.' . $locale . '.address')</label>
                                <input type="text" name="{{ $locale }}[address]" class="form-control" value="{{ $homes->translate($locale)->address }}">
                            </div>
                    @endforeach
                    <div class="form-group">
                      <label>@lang('site.phone')</label>
                      <input type="number" name="phone" class="form-control" value="{{ $homes->phone }}">
                    </div>
                          <div class="form-group">
                      <label>@lang('site.email')</label>
                      <textarea name="mail" class="form-control">{{ $homes->mail }}</textarea>
                    </div>

                    <div class="form-group">
                    <label>@lang('site.facebooklink')</label>
                    <input type="text" name="facebooklink" class="form-control" value="{{ $homes->facebooklink}}">
                    </div>
                    <div class="form-group">
                    <label>@lang('site.twitterlink')</label>
                    <input type="text" name="twitterlink" class="form-control" value="{{ $homes->twitterlink}}">
                    </div>
                    <div class="form-group">
                    <label>@lang('site.linkedenlink')</label>
                    <input type="text" name="linkedenlink" class="form-control" value="{{ $homes->linkedenlink}}">
                    </div>
                    <div class="form-group">
                    <label>@lang('site.googlepluslink')</label>
                    <input type="text"name="googlepluslink" class="form-control  " value="{{ $homes->googlepluslink}}" >
                    </div>
                    <div class="form-group">
                    <label>@lang('site.clients')</label>
                    <input type="number"name="clients" class="form-control  " value="{{ $homes->clients}}" min="0" >
                    </div>
                    <div class="form-group">
                    <label>@lang('site.activeproject')</label>
                    <input type="number"name="activeproject" class="form-control  " value="{{ $homes->activeproject}}" min="0">
                    </div>
                    <div class="form-group">
                    <label>@lang('site.complateproject')</label>
                    <input type="number"name="completedproject" class="form-control  " value="{{ $homes->completedproject}}" min="0" >
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                    </div>

                    </form><!-- end of form -->
              </div>
              <!-- /.tab-pane -->
            
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
@endsection
