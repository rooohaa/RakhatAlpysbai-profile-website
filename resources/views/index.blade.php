<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />

    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <!-- Main stylesheet -->
      <link href="{{ asset('style.min.css') }}" rel="stylesheet" type="text/css" >

    <title>RLX Portfolio</title>
  </head>
  <body>
    <!-- Showcase -->
    <div id="showcase">
      <!-- Header -->
      <header class="header">
        <div class="container">
          <a href="{{ route('/') }}">
            <h1 class="header__logo">RLXX</h1>
          </a>

          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item">
                <a href="{{ route('about') }}" class="header__link">{{__('index.about')}}</a>
              </li>

              <li class="header__item">
                <a href="{{ route('services') }}" class="header__link">{{__('index.services')}}</a>
              </li>

              <li class="header__item">
                <a href="{{ route('projects') }}" class="header__link">{{__('index.projects')}}</a>
              </li>

              <li class="header__item">
                <a href="{{ route('contacts') }}" class="header__link">{{__('index.contacts')}}</a>
              </li>
            </ul>
          </nav>

          <div class="h-menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </header>

      <!-- Promo -->
      <section class="promo">
        <div class="container">
          <div class="promo__descr">
            <h2 id="promo-descr"></h2>

            <p>
                {{__('index.descr')}}
            </p>

            <a href="#my_projects" class="btn">{{__('index.btn-proj')}}</a>
          </div>

          <div class="promo__img">
            <img src="{{url('/images/photo.jpg')}}" alt="Me" id="my-photo" />
          </div>
        </div>
      </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p>Copyright &copy; 2020 <span>Rakhat.</span></p>

        <div class="social">
          <div>
            <a href="https://vk.com/rlxxxz" target="_blank"
              ><i class="fab fa-vk"></i
            ></a>
          </div>

          <div>
            <a href="https://www.instagram.com/rooooohaa/" target="_blank"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>

          <div>
            <a href="https://github.com/rooohaa" target="_blank"
              ><i class="fab fa-github"></i
            ></a>
          </div>

          <div>
            <a
              href="https://www.linkedin.com/in/%D1%80%D0%B0%D1%85%D0%B0%D1%82-%D0%B0%D0%BB%D0%BF%D1%8B%D1%81%D0%B1%D0%B0%D0%B9-5227391bb/"
              target="_blank"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </div>

        <a id="up-btn" href="#showcase">
          <i class="fas fa-arrow-up"></i>
        </a>
      </div>
    </footer>

    <script src="{{ URL::asset('script.js') }}"></script>
  </body>
</html>
