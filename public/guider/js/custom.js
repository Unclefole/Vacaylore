$(function () {
    $("div#navbar > ul > li").each(function () {
        var mobbody = $(this).html();
        $(".sidenav").append("<div>" + mobbody + "</div>");
    });
    $("#mySidenav a").each(function () {
        if ($(this).find(".caret").length > 0) {
            $(this).parent("div").attr("id", "hassubmenu");
            $(this).after('<i class="fa fa-angle-down"></i>');
        }
    });
    $("#mySidenav #hassubmenu i.fa.fa-angle-down").click(function () {
        $(this).next("ul.dropdown-menu").slideToggle();
    });
});

function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
}

function closeNav() {
    document.getElementById("mySidenav").style.left = "-250px";
}

new WOW().init();

// ---------------------------------------------- js of index page ----------------------------------------------

AOS.init({
    duration: 1000,
});

$(".nav-toggle").click(function (e) {
    e.preventDefault();
    $("html").toggleClass("openNav");
    $(".nav-toggle").toggleClass("active");
});

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
// ---------------------------------------------- js of index page ----------------------------------------------

// <!-- --------------------------------------- Membership --------------------------------------- -->

AOS.init({
    duration: 1000,
});

$(".nav-toggle").click(function (e) {
    e.preventDefault();
    $("html").toggleClass("openNav");
    $(".nav-toggle").toggleClass("active");
});

// <!-- --------------------------------------- Membership --------------------------------------- -->

// <!-- --------------------------------------- Add_ New --------------------------------------- -->
AOS.init({
    duration: 1000,
});

$(".nav-toggle").click(function (e) {
    e.preventDefault();
    $("html").toggleClass("openNav");
    $(".nav-toggle").toggleClass("active");
});
// <!-- --------------------------------------- Add_ New --------------------------------------- -->

// <!-- --------------------------------------- Dash_1 --------------------------------------- -->

AOS.init({
    duration: 1000,
});

$(".nav-toggle").click(function (e) {
    e.preventDefault();
    $("html").toggleClass("openNav");
    $(".nav-toggle").toggleClass("active");
});

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

// <!-- --------------------------------------- Dash_1 --------------------------------------- -->

// ====================================== JS GET N POST REQUEST ======================================
function AjaxRequest(url, data) {
    var res;
    $.ajax({
        url: url,
        data: data,
        async: false,
        error: function () {
            console.log("error");
        },
        dataType: "json",
        success: function (data) {
            res = data;
        },
        type: "POST",
    });
    return res;
}

function AjaxRequest_get(url, data) {
    var res;
    $.ajax({
        url: url,
        data: data,
        async: false,
        type: "GET",
        dataType: "json",
        success: function (data) {
            res = data;
        },
        error: function () {
            console.log("error");
        },
    });
    return res;
}
// ============================================================================
