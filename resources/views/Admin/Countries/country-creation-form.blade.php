@extends('layouts.admin_base')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add country</h4>
                <h4 class="page-title text-center text-success">
                    @if(session('msg'))
                    {{session('msg')}}
                    @endif
                </h4>
                <h4 class="page-title text-center text-danger">
                    @if(session('errors'))
                    {{session('errors')}} <br>
                    {{-- {{session('errors')->first('country_code[]')}} --}}
                    @endif
                </h4>
                <br>
                <span>Please select the number of Countries to create</span>
                <select id="num">
                    @for ($i = 0; $i < 7; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form action="{{ route('country.store') }}" method="POST">
                @csrf
                    <div id="form">
                        
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create country</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var num = document.getElementById('num')
    var form = document.getElementById('form')

    num.onchange = () => {
        console.log(num.value)
        var i = 0
        
            var chd = '<div id="form" class="form-group">'
                chd +=    '</div>'
                chd +=  '<div class="form-group">'
                chd +=      '<label>Country Name</label>'
                chd +=      '<input class="form-control" type="text" name="country_name[]">'
                chd +=  '</div>'
                chd +=  '<div class="form-group">'
                chd +=      '<label>Country Code</label>'
                chd +=      '<input class="form-control" type="text" name="country_code[]">'
                chd +=  '</div>'
                var form_inner = ""
                for(i; i< num.value; i++){
                    form_inner += chd;
                }
                form.innerHTML=form_inner
    }
</script>
@endsection