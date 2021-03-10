@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Contact Us</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.contact.index') }}">Contact Us</a></a></li>
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

                    <form action="{{ route('dashboard.contact.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        @foreach (config('translatable.locales') as $locale)
                            

                            <div class="form-group">
                                <label>العنوان @lang( $locale )</label>
                                <textarea name="{{ $locale }}[address]" class="form-control ">{{ old($locale . '.address') }}</textarea>
                            </div>

                     @endforeach

                            <div class="form-group">
                                <label>رقم الهاتف الصيني</label>
                                <input type="text" name="phone_1" class="form-control" value="{{ old($locale . '.section_1') }}">
                            </div>

                            <div class="form-group">
                                <label>الموقع الصيني</label>
                                <input type="text" name="map_1" class="form-control" value="{{ old($locale . '.section_2') }}">
                            </div>

                            <div class="form-group">
                                <label>الايميل الصيني</label>
                                <input type="email" name="email_1" class="form-control" value="{{ old($locale . '.section_3') }}">
                            </div>
                            <div class="form-group">
                                <label>رقم الهاتف التركي</label>
                                <input type="text" name="phone_2" class="form-control" value="{{ old($locale . '.section_4') }}">
                            </div>
                            <div class="form-group">
                                <label>الموقع التركي</label>
                                <input type="text" name="map_2" class="form-control" value="{{ old($locale . '.section_5') }}">
                            </div>
                            <div class="form-group">
                                <label>الايميل التركي</label>
                                <input type="email" name="email_2" class="form-control" value="{{ old($locale . '.section_6') }}">
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
