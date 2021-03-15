@if(session()->has('update'))
        <div class="alert alert-success">
                
                 {{ session()->get('update')}}
        </div>
        @endif 

        @if(session()->has('sup'))
        <div class="alert alert-danger">
                
                 {{ session()->get('sup')}}
        </div>
        @endif 

        @if(session()->has('aj'))
        <div class="alert alert-success">
                
                 {{ session()->get('aj')}}
        </div>
        @endif 