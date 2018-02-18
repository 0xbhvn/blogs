@extends ('layouts.master')

@section ('content')
<main role="main" class="container">
  <div class="col-sm-8">
    <h1>Sign In</h1>
    <form method="post" action="/login">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required/>
      </div>

      <div class="form-group">
        <label for="password">Password:</label> 
        <input type="password" class="form-control" id="password" name="password" required/>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

      <div class="form-group">
        @include ('layouts.errors')
      </div>
    </form>
  </div>
</main>
@endsection
