<div class="mb-8">
    <label for="{{$name}}" class="font-semibold">{{$label}}</label>
    <br/>
    @foreach( $options as $id => $label)
        <input type="checkbox" id="{{$name}}_{{$id}}" name="{{$name}}[]" value="{{$id}}" @checked(in_array($id, old($name, $values)))>
        <label for="{{$name}}_{{$id}}">{{$label}}</label><br>
    @endforeach
    @error($name)
    <div class="text-sm p-2 text-red-500">
        {{$message}}
    </div>
    @enderror
</div>
