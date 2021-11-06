
@include('_templates/header')

<div class="row text-center">
    <div class="card card-full-width">
    <div class="card-header">
         
        header
        
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-md-6 col-lg-6 col-xs-6">
            <div class="col-12">
              <div class="form-group text-center justify-content-center align-middle" style="width :100%;" >
                    <form action="{{url('/wniosek_dyrektora/check_rspo')}}" method="POST" data-toggle="validator" class="form-iline justify-content-center align-middle">                
                        @csrf
                <label for="nr_rspo_dyr">Nowe sprawozdanie Dyrektora do organu prowadzącego:</label>
                        <input type="text" class="form-control liczby_class" id="nr_rspo_dyr"  name="nr_rspo_dyr" placeholder="wpisz nr RSPO i naciśnij enter" value="" required tabindex="2" >
               <input type="submit" style="position: absolute; left: -9999px"/>
                 
               @if(session('rspo_dyr_error'))
                    <div class="alert alert-danger m-3">
                        {{ session('rspo_dyr_error') }}
                </div>
                @endif
               
              
                    </form>
                </div>
            </div>
        </div>
            <div class="col-md-6 col-lg-6 col-xs-6">
                        <label for="nr_rspo_dyr">Edycja wniosku:</label>
                     <form action="sprawozdanie_dyrektora/edycja_sprawozdania_dyrektor" method="POST" data-toggle="validator">
                         @csrf
                           <input type="text" class="form-control " id="nr_uid_dyrektor_edycja"  name="nr_uid_edycja_dyrektor" placeholder="wpisz unikalny numer i nacisnij enter" value="" required autofocus tabindex="1">
                            
                            <div id="error_info_edycja" class="help-block error_label  with-errors"></div>
                     </form>
            </div>
        </div>
            <div class="col-md-12 col-sm-12 col-lg-12 text-center" ><label><b>INFORMACJA</b></label>
                       <p class="text-center">Osoby, które korzystają z przeglądarki INTERNET EXPLORER, mogą mieć problemy z prawidłowym wyświetlaniem aplikacji <br/>oraz z niektórymi funkcjami.
                               Aplikacja jest przystosowana do pracy z przeglądarkami : <b>Firefox</b>, <b>Opera</b>, <b>Chrome</b>, <b>Safari.</b> </p>
             </div>
  </div>
        
        
    </div>    
    </div>


@include('_templates/footer')