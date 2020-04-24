@if ($errors->all())
    <div class="container py-4">
       <div class="row">
           <div class="col-12 mx-auto">
               @foreach($errors->all() as $error)
                   <div class="alert alert-danger alert-dismissible fade show rounded-0 my-1" role="alert">
                       <i class="fas fa-bell mr-2"></i> {{ $error }}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <small>&times;</small>
                    </span>
                       </button>
                   </div>
               @endforeach
           </div>
       </div>
    </div>
@endif
