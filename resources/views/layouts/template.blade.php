<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') | Mencari Angka</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<style>
		.navbar ul li a {
			color:white;
		}

		/*sidebar*/
		.wrapper {
		    display: flex;
		    width: 100%;
		    align-items: stretch;
		}

		#sidebar {
		    min-width: 250px;
		    max-width: 250px;
    		min-height: 100vh;
		}

		#sidebar.active {
		    margin-left: -250px;
		}

		a[data-toggle="collapse"] {
		    position: relative;
		}

		.dropdown-toggle::after {
		    display: block;
		    position: absolute;
		    top: 50%;
		    right: 20px;
		    transform: translateY(-50%);
		}

		@media (max-width: 768px) {
		    #sidebar {
		        margin-left: -250px;
		    }
		    #sidebar.active {
		        margin-left: 0;
		    }
		}

		body {
		    font-family: 'Poppins', sans-serif;
		    background: #fafafa;
		}

		p {
		    font-family: 'Poppins', sans-serif;
		    font-size: 1.1em;
		    font-weight: 300;
		    line-height: 1.7em;
		    color: #999;
		}

		a, a:hover, a:focus {
		    color: inherit;
		    text-decoration: none;
		    transition: all 0.3s;
		}

		#sidebar {
		    /* don't forget to add all the previously mentioned styles here too */
		    background: #274755;
		    color: #fff;
		    transition: all 0.3s;
		}

		#sidebar .sidebar-header {
		    padding: 20px;
		    background: #6d7fcc;
		}

		#sidebar ul.components {
		    padding: 20px 0;
		    border-bottom: 1px solid #47748b;
		}

		#sidebar ul p {
		    color: #fff;
		    padding: 10px;
		}

		#sidebar ul li a {
		    padding: 10px;
		    font-size: 1.1em;
		    display: block;
		}
		#sidebar ul li a:hover {
		    color: #7386D5;
		    background: #fff;
		}

		#sidebar ul li.active > a, a[aria-expanded="true"] {
		    color: #fff;
		    background: #6d7fcc;
		}
		ul ul a {
		    font-size: 0.9em !important;
		    padding-left: 30px !important;
		    background: #6d7fcc;
		}
	</style>
</head>
<body>

			<nav class="navbar navbar-expand-lg" style="background-color: #274755;">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">$ PAITO HK</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">LIVEDRAW HK</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">BET NO HK</a>
			      </li>
			    </ul>
			  </div>
			</nav>

			<main id="app">
				{{-- @yield('content') --}}
			</main>

			<footer>

			</footer>

			
			<div class="wrapper">
				<aside id="sidebar">
					
					<div class="sidebar-header">
			            <h3>Bootstrap Sidebar</h3>
			        </div>

			        <ul class="list-unstyled components">
			            <p>Dummy Heading</p>
			            <li class="active">
			                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
			                <ul class="collapse list-unstyled" id="homeSubmenu">
			                    <li>
			                        <a href="#">Home 1</a>
			                    </li>
			                    <li>
			                        <a href="#">Home 2</a>
			                    </li>
			                    <li>
			                        <a href="#">Home 3</a>
			                    </li>
			                </ul>
			            </li>
			            <li>
			                <a href="#">About</a>
			            </li>
			            <li>
			                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
			                <ul class="collapse list-unstyled" id="pageSubmenu">
			                    <li>
			                        <a href="#">Page 1</a>
			                    </li>
			                    <li>
			                        <a href="#">Page 2</a>
			                    </li>
			                    <li>
			                        <a href="#">Page 3</a>
			                    </li>
			                </ul>
			            </li>
			            <li>
			                <a href="#">Portfolio</a>
			            </li>
			            <li>
			                <a href="#">Contact</a>
			            </li>
			        </ul>

				</aside>
			</div>


	

	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>