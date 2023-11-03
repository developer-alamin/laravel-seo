
<div class="root">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand brandImg" href="">
      <img src="{{ URL::asset('img/profile_950.jpg') }}" alt="">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
       <li class="nav-item active">
        <a class="nav-link navbar-brand" href="{{ URL::route("Web.home") }}">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="{{ URL::route("Web.About") }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="{{ URL::route("Web.Blog") }}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="{{ URL::route("Web.Potfulio") }}">Potfulio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="{{ URL::route("Web.Contact") }}" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link navbar-brand" href="{{ URL::route("cacth") }}" tabindex="-1" aria-disabled="true">Cache Clear</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navbar-brand" href="{{ URL::route("Web.Login") }}" tabindex="-1" aria-disabled="true">Login</a>
      </li>

    </ul>
  </div>
  </div>
</nav>
<main>
  <div class="container">




