// Toggle Navbar
   
const mobileMenueBtn = document.querySelector("#mobile-menu-button");
const mobileMenu = document.querySelector("#mobile-menu");

mobileMenueBtn.addEventListener('click', () => {
mobileMenu.classList.toggle('hidden');
});

// Website Loader 

var load_time;

function load() 
{
    load_time = setTimeout(showContent, 2000);
}

function showContent() 
{
  document.getElementById("loader").style.display = "none";
  document.getElementById("page_content").style.display = "block";
}
