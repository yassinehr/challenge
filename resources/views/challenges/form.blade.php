<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ old('title') ?? $challenge->title }}" class="form-control">
    <div>{{ $errors->first('title') }}</div>
</div>

<div class="form-group">
    <label for="description">description</label>
    <input type="text" name="description" value="{{ old('description') ?? $challenge->description }}" class="form-control">
    <div>{{ $errors->first('description') }}</div>
</div>
<div class="form-group">

<select name="status" id="status" class="form-control">
    <option value="" disabled>Select challenge status</option>

    @foreach($challenge->statusOptions() as $statusOptionKey => $statusOptionValue)
        <option value="{{ $statusOptionKey }}" {{ $challenge->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
    @endforeach
</select>
</div>
<div>{{ $errors->first('status') }}</div>

<div class="form-group">
    <label for="start">start date</label>
    <input type="date"  name="start"  value="{{ old('start') ?? $challenge->start }}" class="form-control">
        <div>{{ $errors->first('start') }}</div>
</div>
<div class="form-group">
    <label for="deadline">deadline</label>
    <input type="date"  name="deadline"  value="{{ old('deadline') ?? $challenge->deadline }}" class="form-control">
        <div>{{ $errors->first('deadline') }}</div>
</div>

@csrf
