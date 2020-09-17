@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" value="{{old('title',$question->title)}}" name="title" id="question-title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}">
    @if ($errors->has('title'))
    <div class="invalid-feedback">
        <strong>{{$errors->first('title')}}></strong>
    </div>
    @endif
</div>

<div class="form-group">
    <label for="question-body">Question Details</label>
    <textarea row="10" name="body" id="question-body" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}">{{old('body',$question->body)}}</textarea>
    @if ($errors->has('body'))
    <div class="invalid-feedback">
        <strong>{{$errors->first('body')}}></strong>
    </div>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-lg {{$btnClass}}">{{$btnText}}</button>
</div>
