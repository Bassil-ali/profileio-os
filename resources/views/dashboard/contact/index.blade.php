@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>Contact US</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">Contact Us</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">Contact Us <small></small></h3>

                    <div class="col-md-4">
                       
                        <a id="r" href="{{ route('dashboard.contact.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.add')</a>
                   
                  
                </div>

                </div><!-- end of box header -->

                <div class="box-body table-responsive">
                  
                    @if ($contacts->count() > 0)

                    <table class="table table-hover table-responsive">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>النص</th>
                            <th>رقم الهاتف الصيني</th>
                            <th>الموقع الصيني</th>
                            <th>الايميل الصيني</th>
                            <th>رقم الهاتف التركي</th>
                            <th>الموقع التركي</th>
                            <th>الايميل التركي</th>
                           
                        
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach ($contacts as $index=>$contact)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <input id="val" type="hidden" value="{{ $contact->id }}">
                                <td>{!! $contact->address !!}</td>
                                <td>{{ $contact->phone_1 }}</td> 
                                <td>{{ $contact->map_1 }}</td> 
                                <td>{{ $contact->email_1 }}</td> 
                                <td>{{ $contact->phone_2 }}</td> 
                                <td>{{ $contact->map_2 }}</td> 
                                <td>{{ $contact->email_2 }}</td> 
                                                              
                                <td>
                                   
                                        <a href="{{ route('dashboard.contact.edit', $contact->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('site.edit')</a></br></br>
                                  
                                        <form action="{{ route('dashboard.contact.destroy', $contact->id) }}" method="post" style="display: inline-block">
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
