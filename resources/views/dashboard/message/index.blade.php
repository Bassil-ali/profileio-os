@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>الرسائل</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">الرسائل</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">الرسائل<small></small></h3>

                 

                </div><!-- end of box header -->

                <div class="box-body">
                    @if ($messages->count() > 0)

                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المستخدم</th>
                            <th>الايميل</th>
                            <th>الموضوع</th>
                            <th>الرساله</th>
                           
                        
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($messages as $index=>$message)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td> 
                                <td>{{ $message->supject }}</td> 
                                <td>{{ $message->message }}</td> 
                              
                                                              
                                <td>
                                   
                                  
                                        <form action="{{ route('dashboard.message.destroy', $message->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                        </form><!-- end of form -->
                                   
                                </td>
                            </tr>
                        
                        @endforeach
                        </tbody>

                    </table><!-- end of table -->
                    
                   
                    
                @else
                    
                    <h2>@lang('site.no_data_found')</h2>
                    
                @endif

                 

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
