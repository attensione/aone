
import logo from './Assets/logo.svg';
import './App.scss';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Przygotowujemy plik <code>App.js</code>, strona w przebudowie.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
    </div>
  );
}

export default App;



// // Import our custom CSS
// import '../scss/desktop.scss';
//
// // Import all of Bootstrap's JS
// import * as bootstrap from 'bootstrap';
//
// import "@fontsource/nunito"; // Defaults to weight 400
// import "@fontsource/nunito/400.css"; // Specify weight
// import "@fontsource/nunito/400-italic.css"; // Specify weight and style
//
// const searchInput = document.querySelector('#search-input');
//
// // const modal = new bootstrap.Modal(document.getElementById('search-modal'), {});
// // document.querySelector('#search-button').addEventListener('click', (e) => {
// //     modal.show();
// // });
//
// document.querySelector('#search-modal').addEventListener('shown.bs.modal', event => {
//   searchInput.focus();
// })
//
// document.querySelector('#search-modal').addEventListener('hidden.bs.modal', (e) => {
//   searchInput.value = "";
// })
//
// const body = document.querySelector('body');
// const themeCurrent = document.querySelector('#theme-current');
// const themeLight = document.querySelector('#theme-light');
// const themeDark = document.querySelector('#theme-dark');
// const themeCustom = document.querySelector('#theme-custom');
// const themeSet = localStorage.getItem('theme');
//
// const changeThemeLight = (e) => {
//   themeLight.classList.add('active');
//   themeDark.classList.remove('active');
//   themeCustom.classList.remove('active');
//   themeCurrent.classList.remove(...themeCurrent.classList);
//   themeCurrent.classList.add('bi');
//   themeCurrent.classList.add('bi-sun');
//   body.setAttribute('data-bs-theme', 'light');
//   localStorage.setItem('theme', 'light');
// }
// const changeThemeDark = (e) => {
//   themeDark.classList.add('active');
//   themeLight.classList.remove('active');
//   themeCustom.classList.remove('active');
//   themeCurrent.classList.remove(...themeCurrent.classList);
//   themeCurrent.classList.add('bi');
//   themeCurrent.classList.add('bi-moon');
//   body.setAttribute('data-bs-theme', 'dark');
//   localStorage.setItem('theme', 'dark');
// }
// const changeThemeCustom = (e) => {
//   themeCustom.classList.add('active');
//   themeDark.classList.remove('active');
//   themeLight.classList.remove('active');
//   themeCurrent.classList.remove(...themeCurrent.classList);
//   themeCurrent.classList.add('bi');
//   themeCurrent.classList.add('bi-moon-stars');
//   body.setAttribute('data-bs-theme', 'custom');
//   localStorage.setItem('theme', 'custom');
// }
//
// if (!localStorage.hasOwnProperty('theme')) {
//   localStorage.setItem('theme', 'light');
//   changeThemeLight();
// }
//
// if(themeSet==='light') {
//   changeThemeLight();
// }
// if(themeSet==='dark') {
//   changeThemeDark();
// }
// if(themeSet==='custom') {
//   changeThemeCustom();
// }
//
// themeLight.addEventListener('click', (e) => {
//   e.preventDefault();
//   changeThemeLight(e);
// });
// themeDark.addEventListener('click', (e) => {
//   e.preventDefault();
//   changeThemeDark(e);
// });
// themeCustom.addEventListener('click', (e) => {
//   e.preventDefault();
//   changeThemeCustom(e);
// });
//
//
//
// const infoModal = new bootstrap.Modal('#info-modal', {
//   keyboard: true
// })
// const currenciesModal = new bootstrap.Modal('#currencies-modal', {
//   keyboard: true
// })
// const searchModal = new bootstrap.Modal('#search-modal', {
//   keyboard: true
// })
//
//
// window.onkeydown = function(e) {
//   var ck = e.keyCode ? e.keyCode : e.which;
//   if(e.ctrlKey && ck == 70){
//     e.preventDefault();
//     searchModal.show();
//   }
//   if(e.ctrlKey && ck == 73){
//     e.preventDefault();
//     currenciesModal.show();
//   }
// }
//
//
// var downloadFiles = document.getElementsByClassName("link-to-file");
// Array.from(downloadFiles).forEach((element) => {
//   element.addEventListener('click', function(e) {
//     var url = this.getAttribute("file-url");
//     window.open(url, "_blank", null);
//   });
// });
//
//
//
// import PhotoSwipeLightbox from 'photoswipe/lightbox';
// const lightbox = new PhotoSwipeLightbox({
//   gallery: '#photos',
//   children: 'a',
//   pswpModule: () => import('photoswipe')
// });
// lightbox.init();