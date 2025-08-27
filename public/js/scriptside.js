const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

// Event listener untuk tombol toggle sidebar
toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

// Event listener untuk beralih mode gelap/cerah
modeSwitch.addEventListener("click", () => {
    sidebar.classList.toggle("dark"); // PERUBAHAN DI SINI!

    if(sidebar.classList.contains("dark")){
        modeText.innerText = "Light mode";
    } else {
        modeText.innerText = "Dark mode";
    }
});