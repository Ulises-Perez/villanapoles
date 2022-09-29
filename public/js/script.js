/* JS NAVBAR */
var num = 1; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.menu').addClass('bg-back-oficial');
        $('.menu').addClass('border-b');
        $('.menu').addClass('border-gray-500');
        $('.menu').addClass('border-opacity-25');
    } else {
        $('.menu').removeClass('bg-back-oficial');
        $('.menu').removeClass('border-b');
        $('.menu').removeClass('border-gray-500');
        $('.menu').removeClass('border-opacity-25');
    }
});

function toggleNavbar(collapseID) {
  document.getElementById(collapseID).classList.toggle("hidden");
  document.getElementById(collapseID).classList.toggle("flex");
}

function toggleSearchMobile() {
  document.getElementById("searchMobile").classList.toggle("hidden");
  document.getElementById("searchMobile").classList.toggle("flex");
  document.getElementById("btn-lupa").classList.toggle("fa-search");
  document.getElementById("btn-lupa").classList.toggle("fa-times");
}

function closeAlert(event){
  let element = event.target;
  while(element.nodeName !== "BUTTON"){
    element = element.parentNode;
  }
  element.parentNode.parentNode.removeChild(element.parentNode);
}

function openDropdown(event, dropdownID) {
  let element = event.target;
  while (element.nodeName !== "BUTTON") {
    element = element.parentNode;
  }
  var popper = new Popper(element, document.getElementById(dropdownID), {
    placement: "bottom-start",
  });
  document.getElementById(dropdownID).classList.toggle("hidden");
  document.getElementById(dropdownID).classList.toggle("block");
}

function toggleModal(modalID) {
  document.getElementById(modalID).classList.toggle("hidden");
  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
  document.getElementById(modalID).classList.toggle("flex");
  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  $("#modal-id iframe").attr("src", $("#modal-id iframe").attr("src"));
}

function cerrarModalVideo(modalID){
  document.getElementById(modalID).classList.toggle("hidden");
  document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
  document.getElementById(modalID).classList.toggle("flex");
  document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  $("#modal-id iframe").attr("src", $("#modal-id iframe").attr("src"));
  //location.reload();
}

function openPopover(event, popoverID) {
  let element = event.target;
  while (element.nodeName !== "BUTTON") {
    element = element.parentNode;
  }
  var popper = new Popper(element, document.getElementById(popoverID), {
    placement: "bottom",
  });
  document.getElementById(popoverID).classList.toggle("hidden");
}

/*
var campo = $('#id_del_input').val();

if(campo === ''){
  alert("El campo esta vacío");
 return false;
 document.getElementById("myDIV").style.display = "none";
 }else{
  //Las validaciones que necesitas hacer
 }
 */

/* JS NAVBAR */