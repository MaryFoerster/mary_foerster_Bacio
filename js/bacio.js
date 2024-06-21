// scroll to top
  // Hole den Button
  let scrollToTopBtn = document.getElementById("scrollToTopBtn");

  // Zeige den Button, wenn der Nutzer bis zur Hälfte der Seite scrollt
  window.onscroll = function() { scrollFunction() };
  
  function scrollFunction() {
      if (document.body.scrollTop > window.innerHeight / 2 || document.documentElement.scrollTop > window.innerHeight / 2) {
          scrollToTopBtn.style.display = "block";
      } else {
          scrollToTopBtn.style.display = "none";
      }
  }
  
  // Scrollt die Seite nach oben, wenn der Button geklickt wird
  function scrollToTop() {
      document.body.scrollTop = 0; // Für Safari
      document.documentElement.scrollTop = 0; // Für Chrome, Firefox, IE und Opera
  }
// scroll to top

  
// dialog
  document.addEventListener("DOMContentLoaded", function() {
    var cards = document.querySelectorAll('.card');
    cards.forEach(function(card) {
        card.addEventListener('click', function() {
            var dialogId = this.getAttribute('data-dialog');
            var dialog = document.getElementById(dialogId);
            dialog.showModal();
        });
    });

    var closeButtons = document.querySelectorAll('.close');
    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var dialog = this.closest('dialog');
            dialog.close();
        });
    });

    var dialogs = document.querySelectorAll('dialog');
    dialogs.forEach(function(dialog) {
        dialog.addEventListener('click', function(event) {
            if (event.target === dialog) {
                dialog.close();
            }
        });
    });
});
// dialog


// Jahr
   // Get the current year
   var currentYear = new Date().getFullYear();
   // Set the current year to the span with id "current-year"
   document.getElementById('current-year').textContent = currentYear;
// Jahr