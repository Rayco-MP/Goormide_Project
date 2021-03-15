@extends("layouts.app3")

@section("content")

	<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="/caninis">Caninis</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="/tb_clientes">Clientes</a></li>
                    <li><a href="/tb_mascotas">Mascotas</a></li>
                    <li><a href="/tb_reservas">Reservas</a></li>
                    <li><a href="/tb_habitaciones">Habitaciones</a></li>
					<li><a href="/tb_dietas">Dietas</a></li>
					<li></li>
					<li></li>
					@if (Route::has('login'))
						
						@auth
							<li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
						@else
							<li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>

							@if (Route::has('register'))
								<li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
							@endif
						@endif
						
            		@endif
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>
@endsection