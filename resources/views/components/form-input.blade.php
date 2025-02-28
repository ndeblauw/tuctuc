<div class="mb-8">
    <label for="{{$name}}" class="font-semibold">{{$label}}</label>
    <br/>
    <input type="text" name="{{$name}}" placeholder="{{$placeholder}}" class=" bg-purple-50 w-full p-2 @error($name) border border-red-500 @enderror" value="{{old($name,$value)}}">
    @error($name)
    <div class="text-sm p-2 text-red-500">
        {{$message}}
    </div>
    @enderror
</div>
