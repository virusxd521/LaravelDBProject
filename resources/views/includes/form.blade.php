<form action="{{ action('MovieController@insert') }}" method="POST" class="container">
      @csrf
  <div class="row row-cols-12 justify-content-md-left form-group ">
    <label  for="name">Please enter a movie name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
  </div>
  <div class="row justify-content-md-left form-group">
    <label for="year">Please enter the year creation of the movie</label>
    <input type="number" class="form-control" name="year" id="year">
  </div>
  <div class="row">
      <button type="submit" class="col-md-3 mx-auto btn btn-primary">Submit</button>
  </div>
</form>