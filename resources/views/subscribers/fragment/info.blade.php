@if(Session::has('info'))

    <div id="alert-subscribers" class="col-sm-12">
        <div class="alert alert-info alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">
                &times;
            </button>

            {{ Session::get('info') }}
        </div>
    </div>


    


@endif