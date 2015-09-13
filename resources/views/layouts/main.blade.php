@include('includes.head')

@include('includes.header')

<div class="container">
  <!-- @ToDo - Put sidebar into its own file and make it dynamic -->
  <aside class="sidebar">
    <h2>All tricks</h2>
    <h2>Categories</h2>
  </aside>

  <div class="main-content">
    @yield('content')
  </div>
</div>

@include('includes.footer')
