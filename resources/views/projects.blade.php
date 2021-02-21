<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="{{ asset('style.min.css') }}" rel="stylesheet" type="text/css" >

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

    <title>Обо мне</title>
  </head>
  <body>
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

    <!-- My projects -->
    <section class="projects" id="my_projects">
      <div class="container">
        <h3 class="projects__header section-header">Мои проекты</h3>
        <div class="divider"></div>

        <div class="projects__wrapper">
          <div class="project-card">
            <div class="front">
              <div class="project-img">
                <img src="images/todo.png" alt="Todo-app" />
              </div>

              <ul class="tech_stack">
                <li>JavaScript</li>
                <li>JSX</li>
                <li>React</li>
              </ul>
            </div>

            <div class="back">
              <h3>Todo App</h3>
              <p class="project_descr">
                SPA приложение для заметок личных дел, целей и управления
                задачами в работе. Реализовано на React JS.
              </p>
              <a
                href="https://rlx-todo-app.netlify.app/"
                target="_blank"
                class="demo-btn"
                >Демо</a
              >
              <a
                href="https://github.com/rooohaa/react-todo"
                target="_blank"
                class="git-btn"
                >Github</a
              >
            </div>
          </div>

          <div class="project-card">
            <div class="front">
              <div class="project-img">
                <img src="images/qq.jpg" alt="Sneaker-store" />
              </div>

              <ul class="tech_stack">
                <li>HTML</li>
                <li>CSS | SASS</li>
                <li>JavaScript</li>
              </ul>
            </div>

            <div class="back">
              <h3>Sneaker Store</h3>
              <p class="project_descr">
                Онлайн-магазин который продает кроссовки разных фирм.
                Реализована только клиентская(frontend) часть.
              </p>
              <a
                href="https://sneaker-store.netlify.app/"
                target="_blank"
                class="demo-btn"
                >Демо</a
              >
              <a
                href="https://github.com/rooohaa/sneaker-store-dev"
                target="_blank"
                class="git-btn"
                >Github</a
              >
            </div>
          </div>

          <div class="project-card">
            <div class="front">
              <div class="project-img">
                <img src="images/question.jpg" alt="Podcast-question" />
              </div>

              <ul class="tech_stack">
                <li>JavaScript</li>
                <li>Firebase</li>
                <li>Webpack</li>
              </ul>
            </div>

            <div class="back">
              <h3>Question App</h3>
              <p class="project_descr">
                Приложение с авторизацией через Firebase где можно делиться
                своими вопросами с людьми.
              </p>
              <a
                href="https://podcast-question.netlify.app"
                target="_blank"
                class="demo-btn"
                >Демо</a
              >
              <a
                href="https://github.com/rooohaa/podcast-questions"
                target="_blank"
                class="git-btn"
                >Github</a
              >
            </div>
          </div>
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
