
<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">StudyMate</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('courses.index')}}">Nos Cours</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">A Propos</a>
            </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </nav>



