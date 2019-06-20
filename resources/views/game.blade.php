@extends('layouts.app')

@section('content')

<div style="width:100%;"> 
    <div class="card-header">
        <div style="text-align: center;"> 
            <img src="{{ asset('images/title.png') }}" alt="Aqui ira la imagen" class="img-fluid">
        </div>
    </div>
</div>
<div class="container" class="cont-fluid">
	<font color="white" face="Comic Sans MS,arial">	    
	    	<TABLE WIDTH="100%" HEIGHT="100%">
                <TR>
                    <TD VALIGN="MIDDLE" ALIGN="CENTER">
  	                    <div style="text-align: center;">
                        	<div style="text-align: center;">
                        		<div class="row">
                        			<div class="card-header">
                        				<img src="{{ asset('images/crashj.jpg') }}" width="80" height="80" alt="Aqui ira la imagen">
                        			</div>
                        			<h1 class="card-header">Crash baticoño</h1>
                        			<div class="card-header">
					                    <a class="btn btn-dark">
					                        Me gusta
					                    </a>
					                    <a class="btn btn-dark">
					                        No me gusta
					                    </a>
					                </div>
                        		</div>
					          	
					      	

                                <iframe src="https://www.juegosjuegos.com/embed/goodgame-big-farm" width="800" height="600" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" webkitallowfullscreen="true" mozallowfullscreen="true" msallowfullscreen="true" allowfullscreen="true" />
                            
                            </div>
                        </div>
                    </TD>
                </TR>
            </TABLE>  	 
	</font>
</div>
<div class="container">
<div style="text-align: center;">
	<font color="white" face="Comic Sans MS,arial">	
    <TABLE WIDTH="100%" HEIGHT="100%">
      <TR>
      <TD VALIGN="MIDDLE" ALIGN="CENTER">
	    <div class="row">
        <h3 class="card-header">Juegos parecidos a Crash baticoño</h3> 
	       <div class="card-header">
	         <img src="{{ asset('images/pacman1.jpg') }}" alt="Aqui ira la imagen" width="80" height="80">
	       </div>     
	    </div>
      </TD>
      </TR>
    </TABLE> 
	</font>
</div>                           
<div class="container">
  <font color="white" face="Comic Sans MS,arial">
    <div class="row">
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bitnosss</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>    
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bitnosss</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bitnosss</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bitnosss</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bitnosss</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bitnosss</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>
      <div class="col">
        <div class="card-header">
          <header>
            <a href="{{ route('infogame') }}">
              <h3 class="text-white">Crash bitnosss</h3>
            </a>
          </header>
        </div>
          <a href="{{ route('infogame') }}">
            <img src="{{ asset('images/crashj.jpg') }}" width="200" height="200" alt="Aqui ira la imagen">
          </a>
      </div>

    </div>
  </font>
</div>
@endsection