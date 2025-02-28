<div class="mb-8">
    <label for="{{$name}}" class="font-semibold">{{$label}}</label>
    <br/>
    <textarea
        name="{{$name}}"
        placeholder="{{$placeholder}}"
        rows="{{$rows}}"
        class=" bg-purple-50 w-full p-2 @error($name) border border-red-500 @enderror"
    >{{old($name,$value)}}</textarea>
    @error($name)
    <div class="text-sm p-2 text-red-500">
        {{$message}}
    </div>
    @enderror
</div>
