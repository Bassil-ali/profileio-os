@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>service</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.header.index') }}">service</a></li>
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

                    <form action="{{ route('dashboard.service.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label>@lang( $locale . 'عنوان النص')</label>
                                <input type="text" name="{{ $locale }}[address1]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')</label>
                                <textarea name="{{ $locale }}[text1]" class="form-control ckeditor">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')</label>
                                <input type="text" name="{{ $locale }}[address2]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')</label>
                                <textarea name="{{ $locale }}[text2]" class="form-control ckeditor">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')</label>
                                <input type="text" name="{{ $locale }}[address3]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')</label>
                                <textarea name="{{ $locale }}[text3]" class="form-control ckeditor">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')</label>
                                <input type="text" name="{{ $locale }}[address4]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')</label>
                                <textarea name="{{ $locale }}[text4]" class="form-control ckeditor">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')</label>
                                <input type="text" name="{{ $locale }}[address5]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')</label>
                                <textarea name="{{ $locale }}[text5]" class="form-control ckeditor">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')</label>
                                <input type="text" name="{{ $locale }}[address6]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')</label>
                                <textarea name="{{ $locale }}[text6]" class="form-control ckeditor">{{ old($locale . '.description') }}</textarea>
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
