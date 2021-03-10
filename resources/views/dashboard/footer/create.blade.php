@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Footer</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.footer.index') }}">Footer</a></li>
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

                    <form action="{{ route('dashboard.footer.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label>اسم الشركة@lang( $locale)</label>
                                <input type="text" name="{{ $locale }}[company_name]" class="form-control" value="{{ old($locale . '.company_name') }}">
                            </div>

                            <div class="form-group">
                                <label>عنوان الشركة@lang( $locale )</label>
                                <input name="{{ $locale }}[address]" class="form-control ">{{ old($locale . '.address') }}</input>
                            </div>

                            <div class="form-group">
                                <label>تفاصيل الشركة@lang( $locale )</label>
                                <textarea name="{{ $locale }}[text]" class="form-control "></textarea>
                            </div>

                        @endforeach

                      
                        <div class="form-group">
                            <label>رقم الهاتف</label>
                            <input type="text" name="phone" step="0.01" class="form-control" value="{{ old('phone') }}">
                        </div>

                        <div class="form-group">
                            <label>الايميل</label>
                            <input type="email" name="email" step="0.01" class="form-control" value="{{ old('email') }}">
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
