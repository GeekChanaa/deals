@extends('layouts.app')

@section('content')
  <!-- Hero section -->
  <section id="hero">
    <div id="hero-content">
      <h1>We'll find the best deals for you</h1>
      <div class="hero-border"></div>
      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laudantium deserunt, incidunt, hic ad perferendis aspernatur suscipit minus sit amet, odio eos eligendi pariatur praesentium, quo natus in doloremque. Ipsa.</h2>
      <form class="search-form" method="post" action="">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 width="28.931px" height="28.932px" viewBox="0 0 28.931 28.932" style="enable-background:new 0 0 28.931 28.932;"
        	 xml:space="preserve">
        	<g>
        		<path d="M28.344,25.518l-6.114-6.115c1.486-2.067,2.303-4.537,2.303-7.137c0-3.275-1.275-6.355-3.594-8.672
        			C18.625,1.278,15.543,0,12.266,0C8.99,0,5.909,1.275,3.593,3.594C1.277,5.909,0.001,8.99,0.001,12.266
        			c0,3.276,1.275,6.356,3.592,8.674c2.316,2.316,5.396,3.594,8.673,3.594c2.599,0,5.067-0.813,7.136-2.303l6.114,6.115
        			c0.392,0.391,0.902,0.586,1.414,0.586c0.513,0,1.024-0.195,1.414-0.586C29.125,27.564,29.125,26.299,28.344,25.518z M6.422,18.111
        			c-1.562-1.562-2.421-3.639-2.421-5.846S4.86,7.983,6.422,6.421c1.561-1.562,3.636-2.422,5.844-2.422s4.284,0.86,5.845,2.422
        			c1.562,1.562,2.422,3.638,2.422,5.845s-0.859,4.283-2.422,5.846c-1.562,1.562-3.636,2.42-5.845,2.42S7.981,19.672,6.422,18.111z"/>
        	</g>
        </svg>
        <label for="search-input">Search by price, category, performance or year</label>
        <input type="text" id="search-input" autocomplete="off">
      </form>
    </div>
    <div id="hero-bg">

    </div>
  </section>
@endsection
