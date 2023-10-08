<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$value}}">
    <div id="emailHelp" class="form-text text-danger">
        @error($name)
            {{$message}}
        @enderror
    </div>
</div>