@foreach ($agencies as $agency)
<form action="/api/agencies/{{$agency->agency_id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$agency->name}}">
        <input type="submit" value="{{$agency->country}}">
        <input type="submit" value="{{$agency->type}}">
    </div>
</form>
@endforeach