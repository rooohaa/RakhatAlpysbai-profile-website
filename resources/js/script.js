// Progress bar
const $bars = document.querySelectorAll('.bar');
let onlyOnce = true

window.addEventListener('scroll', onScroll)

// listen for scroll event
function onScroll() {
   let scrollPosition = window.scrollY

   if (scrollPosition > 800 && onlyOnce) {
      startFilling()
      onlyOnce = false
   }
}

function startFilling() {
   $bars.forEach(bar => {
      let attr = bar.getAttribute('data-value')
      fillBar(bar, attr)
   });
   window.removeEventListener('scroll', onScroll)
}

function fillBar($bar, $percent) {
   let percent = 0

   let interval = setInterval(() => {
      if (percent <= $percent) {
         percent++
         $bar.style.width = `${percent}%`
      }
   }, 18);

   setTimeout(() => {
      clearInterval(interval)
   }, 2500)
}

// Animations on scroll
window.addEventListener('scroll', animateOnScroll)

function animateOnScroll() {
   let position = window.scrollY

   if (position >= 1600) {

      const first = document.querySelector('.services__wrapper div:nth-child(1)')
      const second = document.querySelector('.services__wrapper div:nth-child(2)')
      const btn = document.querySelector('.btn-block')

      first.classList.add('animate1')
      second.classList.add('animate2')
      btn.style.display = 'block'

      removeHandler()
   }
}

function removeHandler() {
   window.removeEventListener('scroll', animateOnScroll)
}

// Hamburger menu
const menu = document.querySelector('.h-menu'),
      nav = document.querySelector('.header__nav'),
      header = document.querySelector('.header')
      logo = document.querySelector('.header__logo')

let isOpen = false
const spans = document.querySelectorAll('.h-menu span')


menu.addEventListener('click', () => {

   if (isOpen) {
      menu.classList.remove('open')
      nav.style.display = 'none'
      header.style.backgroundColor = 'rgb(25, 26, 29)'
      logo.style.color = '#fff'

      isOpen = false
   } else {
      nav.style.display = 'block'
      header.style.backgroundColor = '#fff'
      logo.style.color = '#333'
      menu.classList.add('open')

      isOpen = true
   }
})

window.addEventListener('scroll', () => {
   let pos = window.scrollY

   if (isOpen && pos > 60) {
      menu.classList.remove('open')
      nav.style.display = 'none'
      header.style.backgroundColor = 'rgb(25, 26, 29)'
      logo.style.color = '#fff'

      isOpen = false
   }
})
