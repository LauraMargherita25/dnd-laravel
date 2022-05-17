<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
              <a href="{{ route('monsters.index')}}" class="text-danger">
                <img src="https://www.pngkey.com/png/full/141-1413410_d-d-logo-png-dungeons-and-dragons-icon.png" alt="" width="70" height="40" class="d-inline-block align-text-center">
                  Dungeons & Dragons
              </a>
              
            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('monsters.index') }}">List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('monsters.create') }}">Create</a>
              </li>
            </ul>

          </div>
          <form action="{{ route('search') }}" type="get" class="d-flex">
                    <input class="form-control" name="query" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
      </nav>
</header>