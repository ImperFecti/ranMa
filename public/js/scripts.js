// JavaScript for fade-in effect on scroll
document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(".fade-in");

  // Function to check if elements should fade in based on scroll position
  function checkFadeIn() {
    const triggerHeight = window.innerHeight * 0.75;

    elements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top;

      if (elementTop < triggerHeight) {
        element.classList.add("show");
      } else {
        element.classList.remove("show");
      }
    });
  }

  // Add scroll event listener to check for fade-in effect
  window.addEventListener("scroll", checkFadeIn);
  checkFadeIn(); // Initial check in case elements are already in view
});

function formatRupiah(angka) {
  let number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  if (ribuan) {
    let separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  return "Rp. " + rupiah + (split[1] != undefined ? "," + split[1] : "");
}

document.addEventListener("DOMContentLoaded", function () {
  const formatRupiahElements = document.querySelectorAll(
    "#datatablesSimple tbody tr td:nth-child(3), #datatablesSimple tbody tr td:nth-child(4), #datatablesSimple tbody tr td:nth-child(5)"
  );

  formatRupiahElements.forEach(function (element) {
    let angka = element.textContent;
    element.textContent = formatRupiah(angka.trim());
  });
});

document.querySelectorAll(".faq-question").forEach((button) => {
  button.addEventListener("click", () => {
    const answer = button.nextElementSibling;
    button.classList.toggle("active");
    if (button.classList.contains("active")) {
      answer.style.display = "block";
    } else {
      answer.style.display = "none";
    }
  });
});
