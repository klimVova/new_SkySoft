document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".news-card__container");

  cards.forEach((card) => {
    card.addEventListener("click", function (e) {
      const ripple = document.createElement("span");
      ripple.classList.add("ripple");

      this.appendChild(ripple);

      const x = e.clientX - this.getBoundingClientRect().left;
      const y = e.clientY - this.getBoundingClientRect().top;

      ripple.style.left = `${x}px`;
      ripple.style.top = `${y}px`;

      ripple.classList.add("active");

      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });

  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  }, observerOptions);

  const scrollElements = document.querySelectorAll(".scroll-animate");
  scrollElements.forEach((el) => observer.observe(el));
});
