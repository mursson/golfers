<div class="card border-primary mb-3">
    <div class="card-header">Menú</div>

    <div class="card-body">
		<ul class="nav nav-pills flex-column">

		@if (auth()->check())

			<li class="nav-item"><a href="/home" @if(request()->is('home')) class="nav-link active" @else class="nav-link" @endif>Dashboard</a></li>

			<li class="nav-item"><a href="/matches" @if(request()->is('match')) class="nav-link active" @else class="nav-link" @endif>View Matches</a></li>

			@if (! auth()->user()->is_client )

			<li class="nav-item"><a href="/report" @if(request()->is('report')) class="nav-link active" @else class="nav-link" @endif>Report match</a></li>
			@endif

			@if ( auth()->user()->is_admin )
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administración</a>
			<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
			<a class="dropdown-item" href="/usuarios">Users</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="/courses">Courses</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="/competitions">Competitions</a>
			<div class="dropdown-divider"></div>			
			<a class="dropdown-item" href="#">Configuración</a>
			</div>
			</li>
			@endif

		@else
			<li class="nav-item"><a href="#" class="nav-link">Bienvenido</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Instrucciones</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Créditos</a></li>
		@endif
		</ul>
	</div>		
</div>
