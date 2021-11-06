
@include('_templates/header')

<div class="row">
    <div class="col">
        
   @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      
        <div class="row">
            <div class="col">
                
                <span>Dziekujemy za uzupelnienie formularza</span>
                
             
                
                <br/>
                
                {{ request()->segment(count(request()->segments())) }}
            </div>
        </div>
    </div>
  </div>
        
    </div>
</div>
@include('_templates/footer')