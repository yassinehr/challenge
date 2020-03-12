<div class="form-group">
    <label for="challenge_id">Challenge</label>
    <select name="challenge_id" id="challenge_id" class="form-control">
        @foreach ($challenges as $challenge)
            <option value="{{ $challenge->id }}">{{ $challenge->title }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="code">code</label>
    <input type="text" name="code" id="code" value="{{ old('code') ?? $code }}" class="form-control">
</div>



@csrf
