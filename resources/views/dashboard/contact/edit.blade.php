@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Contact Us</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.contact.index') }}"> Contact Us</a></li>
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

                    <form action="{{ route('dashboard.contact.update',$contact->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        @foreach (config('translatable.locales') as $locale)
                            

                            <div class="form-group">
                                <label>@lang( $locale . '.الوصف')</label>
                                <textarea name="{{ $locale }}[address]" class="form-control ckeditor">{{ $contact->address }}</textarea>
                            </div>

                            @endforeach

                            <div class="form-group">
                                <label> رقم العاتف الصيني</label>
                                <input type="text" name="phone_1" class="form-control" value="{{ $contact->phone_1  }}">
                            </div>

                            <div class="form-group">
                                <label> الموق الصيني</label>
                                <input type="text" name="map_1" class="form-control" value="{{ $contact->map_1  }}">
                            </div>

                            <div class="form-group">
                                <label>'الايميل الصيني</label>
                                <input type="email" name="email_1" class="form-control" value="{{ $contact->email_1 }}">
                            </div>
                            <div class="form-group">
                                <label>رقم الهاتف التركي</label>
                                <input type="text" name="phone_2" class="form-control" value="{{ $contact->phone_2 }}">
                            </div>
                            <div class="form-group">
                                <label>الموقع التركي</label>
                                <input type="text" name="map_2" class="form-control" value="{{ $contact->map_2 }}">
                            </div>
                            <div class="form-group">
                                <label>الايميل التركي</label>
                                <input type="email" name="email_2" class="form-control" value="{{ $contact->email_2 }}">
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
