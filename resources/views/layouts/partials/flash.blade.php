@if(session('statuis'))
   <div class="alert alert-success">
       {{session('status')}}
   </div>
@endif
@if(session('success'))
    <div class="alert-success alert">
        {{session('success')}}
    </div>
@endif
@if(session('error'))
    <div class="alert-error alert">
        {{session('error')}}
    </div>
@endif
@if(session('info'))
    <div class="alert-info alert">
        {{session('info')}}
    </div>
@endif
