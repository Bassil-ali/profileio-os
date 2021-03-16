@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>About US</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">About US</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">About US <small></small></h3>
                    <div class="col-md-4">
                       
                        <a id="r" href="{{ route('dashboard.about.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
                   
                  
                </div>
                 

                </div><!-- end of box header -->

                <div class="box-body table-responsive">

                 

                    @if ($abouts->count() > 0)

                    <table class="table table-hover table-responsive">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>النص</th>
                            <th>عنوان الجزء الاول</th>
                            <th>الجزء الاول</th>
                            <th>عنوان الجزء الثاني</th>
                            <th>الجزء الثاني</th>
                            <th>عنوان الجزء الثالث</th>
                            <th>الجزء الثالث</th>
                            <th>عنوان الجزء الرابع</th>
                            <th>الجزء الرابع</th>
                            <th>عنوان الجزء الخامس</th>
                            <th>الجزء الخامس</th>
                            <th>عنوان الجزء السادس</th>
                            <th>الجزء السادس</th>
                           
                        
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($abouts as $index=>$about)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <input id="val" type="hidden" value="{{ $about->id }}">
                                <td style="width:30%">{!! $about->text !!}</td>
                                <td>{{ $about->address_1 }}</td> 
                                <td>{{ $about->section_1 }}</td> 
                                <td>{{ $about->address_2 }}</td> 
                                <td>{{ $about->section_2 }}</td> 
                                <td>{{ $about->address_3 }}</td> 
                                <td>{{ $about->section_3 }}</td> 
                                <td>{{ $about->address_4 }}</td> 
                                <td>{{ $about->section_4 }}</td> 
                                <td>{{ $about->address_5 }}</td> 
                                <td>{{ $about->section_5 }}</td> 
                                <td>{{ $about->address_6 }}</td> 
                                <td>{{ $about->section_6 }}</td> 
                                                              
                                <td>
                                   
                                        <a href="{{ route('dashboard.about.edit', $about->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a><br><br>
                                  
                                        <form action="{{ route('dashboard.about.destroy', $about->id) }}" method="post" style="display: inline-block">
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

    <script>
          
          $(document).ready(function () {
              
             var val = $('#val').val();
             
            // console.log(val);

            if(val > 0){
                //console.log(val);
                $('#r').hide();
            }

          });
    </script>


@endsection
