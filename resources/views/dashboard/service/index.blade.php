@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Services</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">Services</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px"><small></small></h3>

                    <div class="col-md-4">
                       
                            <a id="r" href="{{ route('dashboard.service.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
                       
                      
                    </div>

                </div><!-- end of box header -->

                <div class="box-body table-responsive">

                    @if ($services->count() > 0)

                    <table class="table">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان الخدمه 1</th>
                            <th>نص الخدمة 1</th>
                            <th>الصورة</th>
                            <th>عنوان الخدمه 2</th>
                            <th>نص الخدمة 2</th>
                            <th>الصورة</th>
                            <th>عنوان الخدمه 3</th>
                            <th>نص الخدمة 3</th>
                            <th>الصورة</th>
                            <th>عنوان الخدمه 4</th>
                            <th>نص الخدمة 4</th>
                            <th>الصورة</th>
                            <th>عنوان الخدمه 5</th>
                            <th>نص الخدمة 5</th>
                            <th>الصورة</th>
                            <th>عنوان الخدمه 6</th>
                            <th>نص الخدمة 6</th>
                            <th>الصورة</th>
                           
                        
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($services as $index=>$service)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <input id="val" type="hidden" value="{{ $service->id }}">
                                <td>{{ $service->address1 }}</td>
                                <td style="width:30%">{!! $service->text1 !!}</td> 
                                <td><img src="{{asset('uploads/product_images/' . $service->image1)}}"  class="img-thumbnail" alt=""></td>   
                                <td>{{ $service->address2 }}</td>
                                <td style="width:30%">{!! $service->text2 !!}</td> 
                                <td><img src="{{ asset('uploads/product_images/' . $service->image2)}}" style="width: 100px;" class="img-thumbnail" alt=""></td>   
                                <td>{{ $service->address3 }}</td>
                                <td style="width:30%">{!! $service->text3 !!}</td>  
                                <td><img src="{{ asset('uploads/product_images/' . $service->image3)}}" style="width: 100px;" class="img-thumbnail" alt=""></td>  
                                <td>{{ $service->address4 }}</td>
                                <td style="width:30%">{!! $service->text4 !!}</td>   
                                <td><img style="width: 300px;!important" src="{{ asset('uploads/product_images/' . $service->image4)}}" style="width: 100px;" class="img-thumbnail" alt=""></td> 
                                <td>{{ $service->address5 }}</td>
                                <td style="width:30%">{!! $service->text5 !!}</td> 
                                <td><img src="{{ asset('uploads/product_images/' . $service->image5)}}" style="width: 100px;" class="img-thumbnail" alt=""></td>   
                                <td>{{ $service->address6 }}</td>
                                <td style="width:30%">{!! $service->text6 !!}</td> 
                                <td><img src="{{asset('uploads/product_images/' . $service->image6)}}" style="width: 100px;" class="img-thumbnail" alt=""></td>                             
                                <td>
                                   
                                        <a href="{{ route('dashboard.service.edit', $service->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a></br></br>
                                  
                                        <form action="{{ route('dashboard.service.destroy', $service->id) }}" method="post" style="display: inline-block">
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
