// End Head



window.onload = () => {
    setTimeout(() => {
        const loading = document.getElementById('loading');
        loading.style.display = 'none';
    }, 1000);
};


// End Header 
var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,

    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        786: {
            slidesPerView: 3,
        },
        991: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
        1400: {
            slidesPerView: 6,
        },
    }
});

// Forms Register
function toSignup() {
    let forms = document.forms;
    for (let i = 0; i < forms.length; i++) {
        forms[i].style.right = '0'
    }
}

function toSignin() {
    let forms = document.forms;
    for (let i = 0; i < forms.length; i++) {
        forms[i].style.right = 'calc(-100% - 30px)'
    }
}

function forgetPassword() {
    let forms = document.forms;
    for (let i = 0; i < forms.length; i++) {
        forms[i].style.right = 'calc(-200% - 60px)'
    }
}

function formControl() {
    let dateSelect = document.getElementById('dateBook');
    let timeSelect = document.getElementById('timeBook');
    let tickectSelect = document.getElementById('tickectBook');
    let ticketsNumber = document.getElementById('ticketsNumber');
    let imageTicket = document.getElementById('imageTicket');
    let requestTicket = document.getElementById('requestTicket');
    let ticketForm = document.getElementById('ticketForm');
    if (dateSelect.value !== '' && timeSelect.value !== '' && tickectSelect.value !== '' && ticketsNumber.value !== '') {
        imageTicket.style.display = "none"
        requestTicket.style.display = "block"
    }
    else {
        imageTicket.style.display = "block"
        requestTicket.style.display = "none"
    }
}






// حقل الاسم - السماح فقط بالحروف العربية والإنجليزية
document.getElementById('cardholderName').addEventListener('input', function (e) {
    let value = e.target.value.replace(/[^a-zA-Z\u0600-\u06FF\s]/g, ''); // السماح بالحروف العربية والإنجليزية والمسافات فقط
    e.target.value = value;
});

// حقل رقم البطاقة - 16 رقم فقط
document.getElementById('cardNumber').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // إزالة أي شيء غير الأرقام
    if (value.length > 16) {
        value = value.slice(0, 16); // تقليص العدد إلى 16 رقم فقط
    }
    value = value.match(/.{1,4}/g)?.join(' ') || ''; // إضافة مسافة كل 4 أرقام
    e.target.value = value;
});

// حقل تاريخ الصلاحية - الشهر مكون من رقمين، السنة 2 أو 4 أرقام
document.getElementById('expiryDate').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // إزالة أي شيء غير الأرقام
    if (value.length > 4) {
        value = value.slice(0, 6); // الشهر 2 أرقام والسنة 4 أرقام فقط
    }
    if (value.length > 2) {
        value = value.slice(0, 2) + '/' + value.slice(2); // إضافة '/' بين الشهر والسنة
    }
    e.target.value = value;
});

// حقل CVV - السماح فقط بـ 3 أرقام
document.getElementById('cvv').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // إزالة أي شيء غير الأرقام
    e.target.value = value.slice(0, 3); // تقليص العدد إلى 3 أرقام فقط
});