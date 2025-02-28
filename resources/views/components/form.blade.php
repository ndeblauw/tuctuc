
<form action="{{$action}}" method="post" class="border-2 border-purple-500 p-4 ">
    @csrf

    @if($method=='put')
        @method('put')
    @endif

    <div class="font-bold text-2xl mb-8 text-purple-500 uppercase">{{$title}}</div>

    {{$slot}}


    <div class="flex justify-end gap-8">
        <a href="{{$cancelurl}}" class="bg-purple-100 text-purple-500 uppercase p-2 font-bold">cancel</a>

        <button type="submit" class="bg-purple-500 text-purple-50 uppercase p-2 font-bold">{{$submittext}}</button>
    </div>
</form>
