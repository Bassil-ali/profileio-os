@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>لوحه التحكم</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i>لوحه التحكم</li>
            </ol>
        </section>

        <section class="content">

            <div class="row">

             
                <div class="col-lg-8 col-xs-8">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3></h3>

                          <center><p>الرسائل</p></center>
                          <center><h4>عدد الرسائل:  {{$messages}}</h4></center>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="" class="small-box-footer">@lang('site.read') <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
               


            </div><!-- end of row -->

         

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

@push('scripts')

  

@endpush