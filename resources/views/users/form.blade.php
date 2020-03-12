<div class="form-group">
    <label for="title">name</label>
    <input type="text" name="name" value="{{ old('name') ?? $user->name }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="email">email</label>
    <input type="text" name="email" value="{{ old('email') ?? $user->email }}" class="form-control">
    <div>{{ $errors->first('email') }}</div>
</div>
<div class="form-group">
    <label for="status">status</label>

<select name="status" id="status" class="form-control">
    <option value="" disabled>Select user status</option>

    @foreach($user->statusOptions() as $statusOptionKey => $statusOptionValue)
        <option value="{{ $statusOptionKey }}" {{ $user->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
    @endforeach
</select>

</div>
<div class="form-group">
    <label for="authority">authority</label>

<select name="authority" id="authority" class="form-control">
    <option value="" disabled>Select user authority</option>

    @foreach($user->authorityOptions() as $authorityOptionKey => $authorityOptionValue)
        <option value="{{ $authorityOptionKey }}" {{ $user->authority == $authorityOptionValue ? 'selected' : '' }}>{{ $authorityOptionValue }}</option>
    @endforeach
</select>

</div>

@csrf
