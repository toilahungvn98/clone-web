
// JS pure

(function() {

  const btnGrid = document.querySelectorAll('#block-btn li .btn-grid');

    // console.log(btnGrid);
    function openTab() {
      let currenTabData = document.querySelector(`#${this.dataset.toggle}`);
      // console.log(currenTabData);

      // remove classess
      document.querySelector('.tabcontent.is-open').classList.remove('is-open');

      document.querySelector('#block-btn li .btn-grid.active').classList.remove('active')
        // add classes
        currenTabData.classList.add('is-open');
        this.classList.add('active');
      }

      btnGrid.forEach( (btn,index) => btn.addEventListener('click', openTab));

//scroll top

const asideBar = document.querySelector('#homepage .aside-choose');
const sectionBar  = document.querySelectorAll('#homepage .section-bar');
const btnBar =  document.querySelectorAll('#homepage .aside-choose .bar .btn-bar');
// console.log(btnBar);
// console.log(totalBar);

function handleScroll(e) {

  let fromTop = window.scrollY;


// console.log(fromTop);
// show aside bar
if (fromTop >= 400) {
  if(asideBar) {
   asideBar.classList.add('show');
 }
} else {
 if(asideBar) {
  asideBar.classList.remove('show');
}
}

// btnBar active 

btnBar.forEach(link => {
    let section = document.querySelector(link.hash); //get section id each section

    if ( section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {

      link.classList.add("current");

    } else {

      link.classList.remove("current");

    }

  });


}

window.addEventListener('scroll',handleScroll);
// Thuộc tính offsetTop trả về vị trí trên cùng (tính bằng pixel) so với đỉnh của phần tử offsetParent.
/* Thuộc tính offsetHeight trả về chiều cao có thể xem của một phần tử tính bằng pixel, 
bao gồm phần đệm, đường viền và thanh cuộn, nhưng không phải là margin. */


})();




// Countdown JS;

(function() {

  const getAllCountDown = document.querySelectorAll('#main .coutdown');
  const getDays = document.querySelectorAll('.coutdown .days .num');
  const getHours = document.querySelectorAll('.coutdown .hours .num');
  const getMins = document.querySelectorAll('.coutdown .mins .num');
  const getSecs = document.querySelectorAll('.coutdown .secs .num');
    // console.log(getDays);





    //year, month,day,hour, min, sec
    const countDownDate = new Date(2019,5,30,11,16,20).getTime();
    // or new Date("Jun 18, 2019 10:30:20");

    //update countdown for
    
    const countdown = setInterval(function(){
        // current time
        const now = new Date().getTime();
        const distance = countDownDate - now ;
        // console.log(now);

        // covert to days, hours, minutes , seconds;
         const days = Math.floor(distance/ (1000 * 60 * 60 * 24)) //1s * 60 = 1phut , 1phut * 60 = 1gio, 1gio * 24 = 1 ngay
         const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
         const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
         const seconds = Math.floor((distance % (1000 * 60)) / 1000);
         // console.log(seconds);

         getDays.forEach( day => day.innerHTML = days);
         getHours.forEach( hour => hour.innerHTML = hours);
         getMins.forEach( min => min.innerHTML = minutes);
         getSecs.forEach( sec => sec.innerHTML = seconds);

          // check het thoi gian thi an countdown;
          if (distance < 0) {
            clearInterval(countdown);
            getAllCountDown.forEach( all => all.style.display = 'none' );
          }


        },1000);




  })();


//Change Color 

(function() {

 const sectionCate = document.querySelectorAll('.categorys');
 // console.log(sectionCate);


 sectionCate.forEach( category => {

  const changeBgTitle = category.querySelector('#homepage .panel-head .category-title');
  const changeColorLink = category.querySelector('#homepage .panel-head .see-all');
  const changeColorBorder = category.querySelector('#homepage .panel-head');
   // console.log(changeColorLink);

   if(category.hasAttribute('data-color')) {
    changeBgTitle.style.backgroundColor =  category.dataset.color;
    changeColorLink.style.color = category.dataset.color;
    changeColorBorder.style.borderColor = category.dataset.color;

  }

});


})();

//Menu hamburger

(function() {

 const humburgerBar = document.querySelectorAll('#homepage .categorys .menu-bar .hamburger-bar');

 function toggleBar () { 
   const overlayMenu = document.querySelector(`#homepage .categorys .overlay-menu[data-open-navbar="${this.dataset.navbar}"]`);
   overlayMenu.classList.add('show');


   overlayMenu.querySelector('.close').addEventListener('click', () => {
    overlayMenu.classList.remove('show');
  });

 }

 humburgerBar.forEach( bar => {
  bar.addEventListener('click',toggleBar);
});


})();


// Aside Bar 
(function() {

 const openBar = document.querySelector('#header .header-bottom .menu-bar');
 // console.log(openBar);
 const asideBar = document.querySelector('#header .header-bottom #sideNav');
 // console.log(asideBar);
 const closeBar = asideBar.querySelector('.closeNav');
 // console.log(closeBar);
 const menuBar = asideBar.querySelector('.accordion-menu');
 // console.log(menuBar);
 const btnBar = menuBar.querySelectorAll('.btn');
 // console.log(btnBar);
 const overlayClose = document.querySelector('#header .header-bottom .overlayClose');
 // console.log(overlayClose);


 openBar.addEventListener('click', () => {
  asideBar.style.width = "250px";
  menuBar.style.display = 'block';
  overlayClose.style.width = '100%';
  overlayClose.style.height = '100vh';
  overlayClose.style.opacity = 1;

});

 closeBar.addEventListener('click', () => {
   asideBar.style.width = "0px";
   menuBar.style.display = 'none';
   overlayClose.style.width = '0px';
   overlayClose.style.height = '0px';
   overlayClose.style.opacity = 0;
 });

 overlayClose.addEventListener('click', () => {
   asideBar.style.width = "0px";
   menuBar.style.display = 'none';
   overlayClose.style.width = '0px';
   overlayClose.style.height = '0px';
   overlayClose.style.opacity = 0;
 });


 btnBar.forEach( btn => {

   btn.addEventListener('click', function() {
     this.classList.toggle("active");
     const siblingBtn = this.nextElementSibling;
     // console.log(siblingBtn);
     // 
     if (siblingBtn.style.maxHeight){
      siblingBtn.style.maxHeight = null;

    } else {
      siblingBtn.style.maxHeight = siblingBtn.scrollHeight + "em";
    } 

  });


 });



})();

 // btn convert grid 
 (function() {

  const btnGrid = document.querySelectorAll('#productPage .product-nav .view-mode .btn');
  const sectionGrid = document.querySelector('#productPage .product-section');
  const sectionGridList = document.querySelector('#productPage .product-section.list');
  // console.log(btnGrid);

  btnGrid.forEach( function(btn, index) {

   btn.addEventListener('click', function() {
     let current = document.querySelectorAll('#productPage .product-nav .view-mode .btn.active');
     // current[0].className = current[0].className.replace(" active", "");
     // this.className += " active";
     // console.log(current);

     current.forEach( function(cur, index) {
      if (cur.classList.contains('active')) {
       cur.classList.remove('active');
     }

   });
     let btnName = btn.classList.value.replace('btn ','');

     let objActive = [...document.getElementsByClassName(btnName)];

     objActive.forEach( function(active, index) {
      active.className += " active";
    });

     if (btn.hasAttribute('data-btn-list')) {
      sectionGridList.classList.add('active');
      sectionGrid.style.display = 'none';
      // this.className += " active";
    } 
    if (btn.hasAttribute('data-btn-grid')) {
      sectionGrid.style.display = 'block';
      sectionGridList.classList.remove('active');
      // this.className += " active";
    } 

  });

 });

})();


//Menu hamburger product page

(function() {

 const menuSelect = document.querySelectorAll('#productPage .product-nav .menu-select');
 console.log(menuSelect);
 const overlayGrid = document.querySelector('#productPage .product-nav .overlay-grid');
 const overlayClose = document.querySelector('#productPage .overlay-close');
 const btnClose = document.querySelector('#productPage .product-nav .overlay-grid .close');
 console.log(overlayClose);


 function toggleBar() {
   overlayGrid.classList.toggle('active');

   // console.log(overlayGrid.classList.contains('active'));

   if (overlayGrid.classList.contains('active')) {

    overlayClose.classList.add('active');

    overlayClose.addEventListener('click', function() {
      this.classList.remove('active');
      overlayGrid.classList.remove('active');
    });
    btnClose.addEventListener('click', function() {
      overlayGrid.classList.remove('active');
      overlayClose.classList.remove('active');
    });

  }


}


menuSelect.forEach( bar => {
  bar.addEventListener('click',toggleBar);
});


})();

 // ---- button quantity and tab table---

 (function() {
  const btnMinus = document.querySelector('#productDetail .block-choose .minus');
  const btnPlus = document.querySelector('#productDetail .block-choose .plus');
  const rangeQty = document.querySelector('#productDetail .block-choose .rangeQty');
  // console.log(rangeQty.value);

  if(btnMinus) {
   btnMinus.addEventListener('click', function() {
     if (rangeQty.value > 1 ) {
       return  rangeQty.value--;
     }
   });
 }

 if(btnPlus) {
  btnPlus.addEventListener('click', function() {
   return rangeQty.value++;
 });
}


const btnTabs = document.querySelectorAll('.tabs .panel__head--list .item');

console.log(btnTabs);
function openTab(e) {
  e.preventDefault();

  let currenTab = document.querySelector(`#${this.dataset.toggleTab}`);
  console.log(currenTab);

      // remove classess
      document.querySelector('.tabs .panel__body .tab-content.active').classList.remove('active');

      document.querySelector('.tabs .panel__head--list .item.active').classList.remove('active');
        // add classes
        currenTab.classList.add('active');
        this.classList.add('active');
      }

      btnTabs.forEach( (btn,index) => btn.addEventListener('click', openTab));
      
      //paragrahp
      const paragrahp = document.querySelector('#description .paragrahp');
      // view more
      const btnMore = document.querySelector('#description .btn-viewMore');
      const text = paragrahp.textContent;
      // console.log(text.length);

      const truncate = function (elem, limit,after) {

        if (!elem || !limit) return;

        let content = elem.textContent.trim();

        content = content.split(' ').slice(0, limit);
       
        content = content.join(' ') + (after ? after : '');

        elem.textContent = content;

      };
      if(text.split(' ').length >= 50) {
            truncate(paragrahp, 50,'...');
            btnMore.classList.add('active');
      } 
      btnMore.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.remove('active');
          
      })

      console.log(btnMore);


    })();

// ================================ LOgin ==============================

(function() {
 const btnLogin = document.querySelector('#header .header-mid .login');
 const bgClose = document.querySelector('#header .header-mid .bg-close');
 const loginForm = document.querySelector('#header .header-mid .account .account-block.login');
 const registerForm = document.querySelector('#header .header-mid .account .account-block.register');
 const closeForm = document.querySelectorAll('#header .header-mid .account .account-block .close-form');

// btn links
const openRegister = document.querySelector('#header .header-mid .account .account-block.login .btn-links');
const openLogin = document.querySelector('#header .header-mid .account .account-block.register .btn-links');

 // console.log(btnRegister);
 // console.log(openLogin);
 // console.log(bgClose);
 // console.log(btnLogin);
 // console.log(loginForm);
 // console.log(closeForm);


 function openForm(e) {
  e.preventDefault(); 
  bgClose.classList.add('active');
  loginForm.classList.add('active');
  // closeForm btn
  closeForm.forEach( close => close.addEventListener('click', function() {
    bgClose.classList.remove('active');
    loginForm.classList.remove('active');
    registerForm.classList.remove('active');
  }));

}

btnLogin.addEventListener('click',openForm);

bgClose.addEventListener('click', function() {
  bgClose.classList.remove('active');
  loginForm.classList.remove('active');
  registerForm.classList.remove('active');
});

openRegister.addEventListener('click', function(e){
  e.preventDefault();
  registerForm.classList.add('active');
  loginForm.classList.remove('active');
})
openLogin.addEventListener('click', function(e){
  e.preventDefault();
  loginForm.classList.add('active');
  registerForm.classList.remove('active');
})



})();








