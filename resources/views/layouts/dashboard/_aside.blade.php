<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-th"></i><span>لوحة التحكم</span></a></li>

            
             

                <li><a href="{{ route('dashboard.header.index') }}"><i class="fa fa-th"></i><span>السلايدر</span></a></li>
          
                <li><a href="{{ route('dashboard.service.index') }}"><i class="fa fa-th"></i><span>الخدمات</span></a></li>

                <li><a href="{{ route('dashboard.ourwork.index') }}"><i class="fa fa-th"></i><span>الاعمال</span></a></li>

         
                <li><a href="{{ route('dashboard.about.index') }}"><i class="fa fa-th"></i><span>من نحن</span></a></li>


                <li><a href="{{ route('dashboard.contact.index') }}"><i class="fa fa-th"></i><span>تواصل معنا</span></a></li>

                <li><a href="{{ route('dashboard.message.index') }}"><i class="fa fa-th"></i><span>الرسائل</span></a></li>

           
                <li><a href="{{ route('dashboard.footer.index') }}"><i class="fa fa-th"></i><span>الفوتر</span></a></li>
          
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-th"></i><span>المستخدمين</span></a></li>
           

           
        </ul>

    </section>

</aside>

