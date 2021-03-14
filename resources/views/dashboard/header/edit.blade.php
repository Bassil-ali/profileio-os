@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>header</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.header.index') }}">header</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.edit')</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.header.update', $header->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                      

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')</label>
                                <input type="text" name="{{ $locale }}[address]" class="form-control" value="{{ $header->address}}">
                            </div>

                            <div class="form-group">
                                <label>@lang( $locale . '.النص')</label>
                                <textarea name="{{ $locale }}[text]" rows="5" class="form-control ">{{ $header->text }}</textarea>
                            </div>

                        @endforeach

                        <div class="form-group">
                            <label>الصوره</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->
            
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
