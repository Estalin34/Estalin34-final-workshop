let app = document.getElementById("typewriter");

let typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .pauseFor(2500)
  .typeString("La Capital del Sol")
  .pauseFor(200)
  .deleteChars(10)
  .start();

  // ABRIR MODAL
  function openModal() {
    var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    myModal.show();
  }
  function openModalSegundo() {
    var myModal1 = new bootstrap.Modal(document.getElementById('segundoProducto'));
    myModal1.show();
  }
  function openModalTercero() {
    var myModal2 = new bootstrap.Modal(document.getElementById('tercerProducto'));
    myModal2.show();
  }