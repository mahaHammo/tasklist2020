@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br/>
        <h3>Edit</h3>
        <br/>
        <form method="post" action="{{action('TaskController@update','$id')}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH" />
            <div class="form_group">
                <input type="text" name="id" value="{{$tasks->id}}" placeholder="Enter ID"/>
            </div>
            <div class="form_group">
                <input type="submit" class="btn
                btn_primary" value="edit"/>
            </div>
        </form>
    </div>
</div>
@endsection