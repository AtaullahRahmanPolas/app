let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick= () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll= () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
        autoHeight:true,
        grabCursor:true,
         breakpoints: {
      640: {
        slidesPerView: 1,   
      },
      768: {
        slidesPerView: 2,
        
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

  let loadMoreBtn = document.querySelector('.collection .load-more .btn');
  let currentItem =3;

  loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.collection .box-container .box')];
    for (var i =currentItem; i< currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
    }

  }


  // Example route for user login
app.post('/login', (req, res) => {
  // Authenticate user and create session
  // Redirect to the applicant list page after successful login
});

// Example route for getting the applicant list
app.get('/applicants', (req, res) => {
  // Retrieve and send a list of applicants in descending order
});

// Example route for getting individual applicant details
app.get('/applicants/:id', (req, res) => {
  // Retrieve and send details of a specific applicant
});

// Example route for adding an admin (accessible only by admins)
app.post('/admin/add', (req, res) => {
  // Authenticate the user as an admin before adding another admin
  // Add a new admin to the database
  // Send a response indicating success or failure
});
