// const modal = document.querySelector('.modal');

// const showModal = document.querySelector('.show-modal');
// const closeModal = document.querySelectorAll('.close-modal');

// showModal.addEventListener('click', function (){
// modal.classList.remove('hidden')
// });

// //setTimeout(() => showTimer(), 1000000);

// closeModal.forEach(close => {
// close.addEventListener('click', function (){
//   modal.classList.add('hidden')
// });
// });                  

//modal show-hide
// const modal = document.querySelectorAll('.modal-item');
// const modalOpen = document.querySelector('.modal-open');

// document.querySelectorAll('.show-modal').forEach(element => {element.addEventListener('click', open)});
// document.querySelectorAll('.modal-close').forEach(element => {element.addEventListener('click', close)});
  
// function open(event) {
//     let command = event.target.parentElement.parentElement.id;
//     command = JSON.parse(command);
    
//     modal[0].innerHTML = command.username;
//     modal[1].innerHTML = command.location;
//     modal[2].innerHTML = command.destination;
//     modal[3].innerHTML = command.phone;
//     modal[4].innerHTML = command.email;
//     modal[5].innerHTML = command.message;

//     modalOpen.classList.remove('hidden');
// };

// function close() {
//     modalOpen.classList.add('hidden');
// };


//Make the DIV element draggagle:
// dragElement(document.querySelector('.modal-open'));

// function dragElement(elmnt) { 
//   let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
//   elmnt.onmousedown = dragMouseDown;

//   function dragMouseDown(e) {
//     // get the mouse cursor position at startup:
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     document.onmouseup = closeDragElement;
//     // call a function whenever the cursor moves:
//     document.onmousemove = elementDrag;
//   }

//   function elementDrag(e) {
//     // calculate the new cursor position:
//     pos1 = pos3 - e.clientX;
//     pos2 = pos4 - e.clientY;
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     // set the element's new position:
//     elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
//     elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
//   }

//   function closeDragElement() {
//     /* stop moving when mouse button is released:*/
//     document.onmouseup = null;
//     document.onmousemove = null;
//   }
// }

