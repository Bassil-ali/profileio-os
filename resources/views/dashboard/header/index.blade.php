@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Header</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">Header</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px"><small></small></h3>

                    <div class="col-md-4">
                       
                            <a href="{{ route('dashboard.header.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
                       
                      
                    </div>

                </div><!-- end of box header -->

                <div class="box-body table-responsive">

                    @if ($headers->count() > 0)

                    <table class="table table-hover table-responsive">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان النص</th>
                            <th>النص</th>
                            <th>الصوره</th>
                        
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($headers as $index=>$header)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $header->address }}</td>
                                <td>{!! $header->text !!}</td>
                                <td><img src="{{ $header->image_path }}" style="width: 100px"  class="img-thumbnail" alt=""></td>
                              
                                <td>
                                   
                                        <a href="{{ route('dashboard.header.edit', $header->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a></br></br>
                                  
                                        <form action="{{ route('dashboard.header.destroy', $header->id) }}" method="post" style="display: inline-block">
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
