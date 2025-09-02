function checkScroll() {
          const elements = document.querySelectorAll('.scroll-animate');
          
          elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
              element.classList.add('visible');
            }
          });
        }
        
        window.addEventListener('load', checkScroll);
        window.addEventListener('scroll', checkScroll);
        
        document.querySelectorAll('.service-card, .advantages-card, .achievements__card').forEach(card => {
          card.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
          });
        });
        
        const introButton = document.querySelector('.intro__button');
        if (introButton) {
          introButton.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 0 15px rgba(255, 243, 67, 0.5)';
          });
          
          introButton.addEventListener('mouseleave', function() {
            this.style.boxShadow = 'none';
          });
        }