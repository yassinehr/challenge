<form action="{{ route('challenges.filter') }}" method="POST" enctype="multipart/form-data">

<div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title"  align="right">
    </div>

    <div class="form-group">
        <label for="status">status</label>
          <select name="status" id="status" >
            <option value="" disabled>Select challenge status</option>
            <option value="0">ongoing</option>
            <option value="1">done</option>
        </select>
    </div>
    <div class="form-group">
        <label for="start">start date</label>
        <input type="date"  name="start" id="start"  align="right">
    </div>
    @csrf

    <button type="submit" class="btn btn-primary">filter Challenge</button>
</div>

</form>

