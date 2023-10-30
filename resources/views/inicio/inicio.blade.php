<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Inicio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/Contact/registrar.js')}}"></script>
    <script src="{{asset('js/Propsal/registrar.js')}}"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
            <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
                <a class="nav-link fw-bold py-1 px-0" href="#">Our services</a>
                <a class="nav-link fw-bold py-1 px-0" href="#">Success Cases</a>
                <a class="nav-link fw-bold py-1 px-0" href="#">Partners</a>
                <a class="nav-link fw-bold py-1 px-0" href="#">Certifications</a>
                <a class="nav-link fw-bold py-1 px-0" href="#">Our Team</a>
                <a class="nav-link fw-bold py-1 px-0" href="#">Contact Us</a>
                <a href="{{ url('cerrarSesion') }}">Salir</a>
                <!-- <select>
                    <option selected></option>
                    <option>
                        <a href="{{ url('cerrarSesion') }}">Salir</a>
                    </option>
                </select> -->
            </nav>
            </div>
        </header>
        <main class="px-3">
            <h1>Bienvenido</h1><br><br><br><br><br><br><br><br>
            <h2>Request a Proposal</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Pellentesque fringilla condimentum ante, quis pulvinar ex vulputate vel. 
                Maecenas orci ante, condimentum vitae facilisis a, facilisis eget arcu.
            </p>
        </main>
        <footer class="mt-auto text-white-50">
            <form action="{{ url('registrarPropuesta') }}" method="POST" id="formPropsal" class="form-inline" autocomplete="off">
            {{ csrf_field() }}
                <div class="form-group mx-sm-3">
                    <label for="inputUser" class="sr-only">Contact person:</label>
                    <input type="text" class="form-control" id="contactPerson" name="contactPerson">
                </div>
                <div class="form-group mx-sm-3">
                    <label>Company:</label>
                    <input type="text" class="form-control" id="company" name="company">
                </div>
                <div class="form-group mx-sm-3">
                    <label>E-mail:</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mx-sm-3">
                    <label>Phone:</label>
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group mx-sm-3">
                    <label>Company’s Needs</label>
                    <input type="text" class="form-control" id="companysNeeds" name="companysNeeds">
                </div>
                    <input class="form-check-input" type="checkbox" value="SI" id="terminosCondiciones" name="terminosCondiciones">
                    <label class="form-check-label" for="flexCheckChecked">
                        I accept the
                        <a href="">terms and conditions</a>
                    </label><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <main class="px-3"><br><br><br><br><br><br>
                <h2>Request a Proposal</h2>
                <h4>(+57) 315 9273307(+57) 315 9273307 - WhatsApp</h4>
                <h4>Calle 99 # 49 - 53 Bogota, COL</h4>
                <h4>yudy.montoya@ariadnacg.com</h4>
            </main><br><br><br><br>
        <h2>Services:</h2>
        <header class="mb-auto">
            <div>
                <nav class="navbar bg-dark border-bottom border-body flex-column" data-bs-theme="dark">
                    <a class="nav-link fw-bold py-1 px-0" href="#">Home</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#">Services</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#">Our works</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#">Methodology</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#">Proposal</a>
                    <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
                </nav>
            </div>
        </header><br><br><br><br>
            <form action="{{ url('registrarContactenos') }}" method="POST" id="formContactus"class="form-inline" autocomplete="off">
                {{ csrf_field() }}
                <h2>Contact us</h2>
                <div class="form-group mx-sm-3">
                    <label for="inputUser" class="sr-only">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group mx-sm-3">
                    <label>E-mail::</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mx-sm-3">
                    <label>Phone::</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group mx-sm-3">
                    <label>Message:</label>
                    <input type="text" class="form-control" id="message" name="message">
                </div>
                    <input class="form-check-input" type="checkbox" value="SI" id="terminosCondiciones" name="terminosCondiciones">
                    <label class="form-check-label" for="flexCheckChecked">
                        I accept the
                        <a href="">terms and conditions</a>
                    </label><br>
                <input type="submit" class="btn btn-primary" value="Submit"/>
            </form><br>
        </footer>
    </div>
    </body>
</html>