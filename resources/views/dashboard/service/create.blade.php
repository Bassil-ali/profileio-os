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
                                <label>@lang( $locale . 'عنوان النص')-1</label>
                                <input type="text" name="{{ $locale }}[address1]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')-1</label>
                                <textarea rows="5" name="{{ $locale }}[text1]" class="form-control ">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')-2</label>
                                <input type="text" name="{{ $locale }}[address2]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')-2</label>
                                <textarea name="{{ $locale }}[text2]" class="form-control ">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')-3</label>
                                <input type="text" name="{{ $locale }}[address3]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')-3</label>
                                <textarea rows="5" name="{{ $locale }}[text3]" class="form-control ">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')-4</label>
                                <input type="text" name="{{ $locale }}[address4]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')-4</label>
                                <textarea name="{{ $locale }}[text4]" class="form-control ">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')-5</label>
                                <input type="text" name="{{ $locale }}[address5]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')-5</label>
                                <textarea rows="5" name="{{ $locale }}[text5]" class="form-control ">{{ old($locale . '.description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.عنوان النص')-6</label>
                                <input type="text" name="{{ $locale }}[address6]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                            <div class="form-group">
                                <label>@lang( $locale . '.النص')-6</label>
                                <textarea rows="5" name="{{ $locale }}[text6]" class="form-control ">{{ old($locale . '.description') }}</textarea>
                            </div>

                           


                        @endforeach
                        <div class="form-group">
                            <label>@lang('site.image')1</label>
                            <input type="file" name="image1" class="form-control image">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')2</label>
                            <input type="file" name="image2" class="form-control image">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')3</label>
                            <input type="file" name="image3" class="form-control image">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')4</label>
                            <input type="file" name="image4" class="form-control image">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')5</label>
                            <input type="file" name="image5" class="form-control image">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')6</label>
                            <input type="file" name="image6" class="form-control image">
                        </div>




                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
