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
                        <a href="{{ route('about') }}" class="header__link">Обо мне</a>
                    </li>

                    <li class="header__item">
                        <a href="{{ route('services') }}" class="header__link">Усулуги</a>
                    </li>

                    <li class="header__item">
                        <a href="{{ route('projects') }}" class="header__link">Мои проекты</a>
                    </li>

                    <li class="header__item">
                        <a href="{{ route('contacts') }}" class="header__link">Контакты</a>
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
              Я из города Нур-Султан. <br />
              Создаю & поддерживаю веб-сайты и SPA приложения с помощью
              JavaScript.
            </p>

            <a href="#my_projects" class="btn">Мои проекты</a>
          </div>

          <div class="promo__img">
            <img src="images/photo.jpg" alt="Me" id="my-photo" />
          </div>
        </div>
      </section>
    </div>

    <!-- About me -->
    <section class="about" id="about_me">
      <div class="container">
        <h3 class="about__header section-header">Обо мне</h3>
        <div class="divider"></div>

        <div class="about__wrapper">
          <div class="about__info">
            <img src="images/me.png" alt="It's me" id="me" />

            <h4>Кто я?</h4>

            <ul class="about__descr">
              <li>
                Я <span>Frontend</span> Разработчик из города
                <span>Нур-Султан</span>, Казахстан.
              </li>

              <li>
                Я увлекаюсь созданием динамических и современных веб-сайтов.
              </li>

              <li>Мое образование: факультет <span>IT, SDU.</span></li>
            </ul>

            <div class="social__links">
              <a href="https://vk.com/rlxxxz" target="_blank"
                ><i class="fab fa-vk"></i
              ></a>
              <a href="https://www.instagram.com/rooooohaa/" target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://github.com/rooohaa" target="_blank"
                ><i class="fab fa-github"></i
              ></a>
              <a
                href="https://www.linkedin.com/in/%D1%80%D0%B0%D1%85%D0%B0%D1%82-%D0%B0%D0%BB%D0%BF%D1%8B%D1%81%D0%B1%D0%B0%D0%B9-5227391bb/"
                target="_blank"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>

          <div class="about__skills">
            <div class="skill__bar">
              <div class="skill">HTML</div>
              <div class="bar" data-value="90"></div>
              <span class="percent">90%</span>
            </div>

            <div class="skill__bar">
              <div class="skill">CSS</div>
              <div class="bar" data-value="90"></div>
              <span class="percent">90%</span>
            </div>

            <div class="skill__bar">
              <div class="skill">SASS</div>
              <div class="bar" data-value="80"></div>
              <span class="percent">80%</span>
            </div>

            <div class="skill__bar">
              <div class="skill">JavaScript</div>
              <div class="bar" data-value="75"></div>
              <span class="percent">75%</span>
            </div>

            <div class="skill__bar">
              <div class="skill">Git</div>
              <div class="bar" data-value="75"></div>
              <span class="percent">75%</span>
            </div>

            <div class="skill__bar">
              <div class="skill">React</div>
              <div class="bar" data-value="60"></div>
              <span class="percent">60%</span>
            </div>

            <div class="skill__bar">
              <div class="skill">UI/UX</div>
              <div class="bar" data-value="50"></div>
              <span class="percent">50%</span>
            </div>

            <div class="skill__bar">
              <div class="skill">Node.js</div>
              <div class="bar" data-value="70"></div>
              <span class="percent">70%</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- My services -->
    <section class="services" id="my_services">
      <div class="container">
        <h3 class="services__header section-header">Услуги</h3>
        <div class="divider"></div>

        <div class="services__wrapper">
          <div class="services__card">
            <div class="icon"><i class="fas fa-laptop-code"></i></div>
            <h2>Web Разработка</h2>
            <span class="services__descr">Адаптивно и Быстро</span>
            <p class="services__text">
              Сейчас каждый веб-сайт имеет две основные цели: <br />
              Во-первых он должен быть адаптивным и работать на всех
              устройствах. Во-вторых сайт должен работать быстро.
            </p>
          </div>

          <div class="services__card">
            <div class="icon"><i class="fas fa-mobile-alt"></i></div>
            <h2>Мобильная Разработка</h2>
            <span class="services__descr">Эффективно и Кроссплатформенно</span>
            <p class="services__text">
              Для любого веб приложения в наше время нужно и мобильное
              приложение. Разработаю мобильное приложение для Android и iOS
              используя React Native.
            </p>
          </div>
        </div>

        <div class="btn-block">
          <a href="#my_contacts" class="btn">Напиши мне</a>
        </div>
      </div>
    </section>

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
