@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>about</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.about.index') }}">about</a></li>
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

                    <form action="{{ route('dashboard.about.update', $about->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                    
                        @foreach (config('translatable.locales') as $locale)
                        <div class="form-group">
                            <label>الوصف@lang(  $locale . '.description')</label>
                            <textarea name="{{ $locale }}[text]" rows="5" class="form-control " >{{ $about->text }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>عنوان الجزء الاول@lang( $locale )</label>
                            <input type="text" name="{{ $locale }}[address_1]" class="form-control"  value="{{ $about->address_1 }}">
                        </div>

                        <div class="form-group">
                            <label>الجزء الاول@lang(  $locale . '.section_1')</label>
                            <input type="text" name="{{ $locale }}[section_1]" class="form-control" value="{{ $about->section_1 }}">
                        </div>

                        <div class="form-group">
                            <label>عنوان الجزء الثاني@lang( $locale )</label>
                            <input type="text" name="{{ $locale }}[address_2]" class="form-control"  value="{{ $about->address_2 }}">
                        </div>

                        <div class="form-group">
                            <label>الجزء الثاني@lang(  $locale )</label>
                            <input type="text" name="{{ $locale }}[section_2]" class="form-control" value="{{ $about->section_2 }}">
                        </div>

                        <div class="form-group">
                            <label>عنوان الجزء الثالث@lang( $locale )</label>
                            <input type="text" name="{{ $locale }}[address_3]" class="form-control"  value="{{ $about->address_3 }}">
                        </div>
                        <div class="form-group">
                            <label>الجزء الثالث@lang(  $locale )</label>
                            <input type="text" name="{{ $locale }}[section_3]" class="form-control" value="{{ $about->section_3 }}">
                        </div>

                        <div class="form-group">
                            <label>عنوان الجزء الرابع@lang( $locale )</label>
                            <input type="text" name="{{ $locale }}[address_4]" class="form-control"  value="{{ $about->address_4 }}">
                        </div>
                        <div class="form-group">
                            <label>الجزء الرابع@lang(  $locale )</label>
                            <input type="text" name="{{ $locale }}[section_4]" class="form-control" value="{{ $about->section_4 }}">
                        </div>
                        <div class="form-group">
                            <label>عنوان الجزء الخامس@lang( $locale )</label>
                            <input type="text" name="{{ $locale }}[address_5]" class="form-control"  value="{{ $about->address_5 }}">
                        </div>
                        <div class="form-group">
                            <label>الجزء الخامس@lang(  $locale )</label>
                            <input type="text" name="{{ $locale }}[section_5]" class="form-control" value="{{ $about->section_5 }}">
                        </div>
                        <div class="form-group">
                            <label>عنوان الجزء السادس@lang( $locale )</label>
                            <input type="text" name="{{ $locale }}[address_6]" class="form-control"  value="{{ $about->address_6 }}">
                        </div>
                        <div class="form-group">
                            <label>الجزء السادس@lang( $locale )</label>
                            <input type="text" name="{{ $locale }}[section_6]" class="form-control" value="{{ $about->section_6 }}">
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
