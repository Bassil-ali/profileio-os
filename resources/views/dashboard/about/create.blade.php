@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>About Us</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.about.index') }}"> About Us</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.about.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        @foreach (config('translatable.locales') as $locale)
                            

                            <div class="form-group">
                                <label>الوصف@lang( $locale . '.description')</label>
                                <textarea name="{{ $locale }}[text]" class="form-control ckeditor">{{ old($locale . '.text') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>الجزء الاول@lang( $locale . '.section_1')</label>
                                <input type="text" name="{{ $locale }}[section_1]" class="form-control" value="{{ old($locale . '.section_1') }}">
                            </div>

                            <div class="form-group">
                                <label>الجزء الثاني@lang( $locale . '.section_2')</label>
                                <input type="text" name="{{ $locale }}[section_2]" class="form-control" value="{{ old($locale . '.section_2') }}">
                            </div>

                            <div class="form-group">
                                <label>الجزء الثالث@lang( $locale . '.section_3')</label>
                                <input type="text" name="{{ $locale }}[section_3]" class="form-control" value="{{ old($locale . '.section_3') }}">
                            </div>
                            <div class="form-group">
                                <label>الجزء الرابع@lang( $locale . '.section_4')</label>
                                <input type="text" name="{{ $locale }}[section_4]" class="form-control" value="{{ old($locale . '.section_4') }}">
                            </div>
                            <div class="form-group">
                                <label>الجزء الخامس@lang(  $locale . '.section_5')</label>
                                <input type="text" name="{{ $locale }}[section_5]" class="form-control" value="{{ old($locale . '.section_5') }}">
                            </div>
                            <div class="form-group">
                                <label>الجزء السادس@lang(  $locale . '.section_6')</label>
                                <input type="text" name="{{ $locale }}[section_6]" class="form-control" value="{{ old($locale . '.section_6') }}">
                            </div>




                        @endforeach

                       

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
