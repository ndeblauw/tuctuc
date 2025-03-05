<div class="mb-8">
    <label for="{{$name}}" class="font-semibold">{{$label}}</label>
    <br/>
    <textarea
        name="{{$name}}"
        placeholder="{{$placeholder}}"
        rows="{{$rows}}"
        class=" editor bg-purple-50 w-full p-2 @error($name) border border-red-500 @enderror"
    >{{old($name,$value)}}</textarea>
    @error($name)
    <div class="text-sm p-2 text-red-500">
        {{$message}}
    </div>
    @enderror
</div>

@if($rte)
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.1/tinymce.min.js" integrity="sha512-RnlQJaTEHoOCt5dUTV0Oi0vOBMI9PjCU7m+VHoJ4xmhuUNcwnB5Iox1es+skLril1C3gHTLbeRepHs1RpSCLoQ==" crossorigin="anonymous"></script>

<script>
    var editor_config = {
        relative_urls : false,
        path_absolute: "{{config('app.url')}}",
        selector: '.editor',
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor textcolor',
            'searchreplace visualblocks fullscreen',
            'contextmenu paste help wordcount code'
        ],
        toolbar: ' undo redo |  bold italic | link | alignleft aligncenter alignright alignjustify | numlist bullist | outdent indent | removeformat | code | help',
    }
    tinymce.init(editor_config);
</script>
@endif
