
//   const buttons = document.querySelectorAll('.portfolio-filter button');
//   const items = document.querySelectorAll('.portfolio-item');

  buttons.forEach(button => {
    button.addEventListener('click', () => {

      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      const filter = button.dataset.filter;

      items.forEach(item => {
        if (filter === 'all' || item.classList.contains(filter)) {
          item.classList.remove('hide');
        } else {
          item.classList.add('hide');
        }
      });

    });
  });



// // ===================================
// // Tempo Website - Enhanced Animations
// // ===================================

// (function() {
//   'use strict';

//   // ===================================
//   // 1. PAGE LOADING ANIMATION
//   // ===================================

//   class PageLoader {
//     constructor() {
//       this.createLoader();
//       this.init();
//     }

//     createLoader() {
//       // Create loader overlay
//       const loader = document.createElement('div');
//       loader.className = 'page-loader';
//       loader.innerHTML = `
//         <div class="loader-content">
//           <div class="loader-spinner"></div>
//           <h2 class="loader-text">Tempo</h2>
//           <div class="loader-progress">
//             <div class="loader-bar"></div>
//           </div>
//         </div>
//       `;
//       document.body.prepend(loader);
//       this.loader = loader;
//       this.progressBar = loader.querySelector('.loader-bar');
//     }

//     init() {
//       let progress = 0;
//       const interval = setInterval(() => {
//         progress += Math.random() * 30;
//         if (progress > 100) progress = 100;

//         this.progressBar.style.width = progress + '%';

//         if (progress >= 100) {
//           clearInterval(interval);
//           this.hideLoader();
//         }
//       }, 200);

//       // Ensure loader hides after page load
//       window.addEventListener('load', () => {
//         setTimeout(() => {
//           if (progress < 100) {
//             this.progressBar.style.width = '100%';
//             clearInterval(interval);
//             this.hideLoader();
//           }
//         }, 500);
//       });
//     }

//     hideLoader() {
//       setTimeout(() => {
//         this.loader.classList.add('loader-hidden');
//         setTimeout(() => {
//           this.loader.remove();
//           document.body.classList.add('page-loaded');
//           this.animatePageContent();
//         }, 600);
//       }, 400);
//     }

//     animatePageContent() {
//       // Animate sections one by one
//       const sections = document.querySelectorAll('section, .hero-area, header');
//       sections.forEach((section, index) => {
//         setTimeout(() => {
//           section.classList.add('section-visible');
//         }, index * 100);
//       });
//     }
//   }

//   // ===================================
//   // 2. PORTFOLIO FILTER WITH ANIMATIONS
//   // ===================================

//   class PortfolioFilter {
//     constructor() {
//       this.filterButtons = document.querySelectorAll('.showcase-filter button');
//       this.portfolioItems = document.querySelectorAll('.work-piece');
//       this.container = document.querySelector('.showcase-grid');
//       this.init();
//     }

//     init() {
//       if (this.filterButtons.length === 0) return;

//       // Set initial state - show all items
//       this.portfolioItems.forEach(item => {
//         item.classList.add('portfolio-show');
//       });

//       // Add click events to buttons
//       this.filterButtons.forEach(button => {
//         button.addEventListener('click', (e) => {
//           e.preventDefault();
//           this.handleFilter(button);
//         });
//       });
//     }

//     handleFilter(clickedButton) {
//       // Update active button
//       this.filterButtons.forEach(btn => btn.classList.remove('active'));
//       clickedButton.classList.add('active');

//       const filter = clickedButton.getAttribute('data-filter');

//       // First, hide all items
//       this.portfolioItems.forEach(item => {
//         item.classList.remove('portfolio-show');
//         item.classList.add('portfolio-hide');
//       });

//       // Wait for hide animation, then show filtered items
//       setTimeout(() => {
//         this.portfolioItems.forEach((item, index) => {
//           const shouldShow = filter === 'all' || item.classList.contains(filter);

//           if (shouldShow) {
//             // Stagger the show animation
//             setTimeout(() => {
//               item.classList.remove('portfolio-hide');
//               item.classList.add('portfolio-show');
//             }, index * 80);
//           }
//         });
//       }, 300);
//     }
//   }

//   // ===================================
//   // 3. SMOOTH SCROLL
//   // ===================================

//   class SmoothScroll {
//     constructor() {
//       this.init();
//     }

//     init() {
//       document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//         anchor.addEventListener('click', (e) => {
//           const href = anchor.getAttribute('href');

//           if (href === '#' || href === '#!') return;

//           const target = document.querySelector(href);
//           if (target) {
//             e.preventDefault();

//             const headerOffset = 80;
//             const elementPosition = target.getBoundingClientRect().top;
//             const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

//             window.scrollTo({
//               top: offsetPosition,
//               behavior: 'smooth'
//             });
//           }
//         });
//       });
//     }
//   }

//   // ===================================
//   // 4. NAVBAR SCROLL EFFECT
//   // ===================================

//   class NavbarScroll {
//     constructor() {
//       this.navbar = document.querySelector('.main-navigation');
//       this.init();
//     }

//     init() {
//       if (!this.navbar) return;

//       window.addEventListener('scroll', () => {
//         if (window.scrollY > 50) {
//           this.navbar.classList.add('scrolled');
//         } else {
//           this.navbar.classList.remove('scrolled');
//         }
//       });
//     }
//   }

//   // ===================================
//   // 5. SCROLL TO TOP BUTTON
//   // ===================================

//   class ScrollToTop {
//     constructor() {
//       this.button = document.querySelector('.back-to-top');
//       this.init();
//     }

//     init() {
//       if (!this.button) return;

//       window.addEventListener('scroll', () => {
//         if (window.scrollY > 300) {
//           this.button.classList.add('show');
//         } else {
//           this.button.classList.remove('show');
//         }
//       });

//       this.button.addEventListener('click', (e) => {
//         e.preventDefault();
//         window.scrollTo({
//           top: 0,
//           behavior: 'smooth'
//         });
//       });
//     }
//   }

//   // ===================================
//   // 6. SCROLL REVEAL ANIMATIONS
//   // ===================================

//   class ScrollReveal {
//     constructor() {
//       this.elements = document.querySelectorAll('.feature-card, .offer-item, .plan-container, .person-profile, .work-wrapper');
//       this.init();
//     }

//     init() {
//       if (this.elements.length === 0) return;

//       const observer = new IntersectionObserver((entries) => {
//         entries.forEach(entry => {
//           if (entry.isIntersecting) {
//             entry.target.classList.add('reveal-visible');
//             observer.unobserve(entry.target);
//           }
//         });
//       }, {
//         threshold: 0.1,
//         rootMargin: '0px 0px -50px 0px'
//       });

//       this.elements.forEach(el => {
//         el.classList.add('reveal-element');
//         observer.observe(el);
//       });
//     }
//   }

//   // ===================================
//   // 7. FORM VALIDATION
//   // ===================================

//   class FormValidation {
//     constructor() {
//       this.form = document.querySelector('.message-form');
//       this.init();
//     }

//     init() {
//       if (!this.form) return;

//       this.form.addEventListener('submit', (e) => {
//         e.preventDefault();

//         const inputs = this.form.querySelectorAll('input, textarea');
//         let isValid = true;

//         inputs.forEach(input => {
//           if (!input.value.trim()) {
//             input.classList.add('input-error');
//             isValid = false;
//           } else {
//             input.classList.remove('input-error');
//           }
//         });

//         if (isValid) {
//           this.showSuccessMessage();
//         }
//       });

//       this.form.querySelectorAll('input, textarea').forEach(input => {
//         input.addEventListener('input', () => {
//           input.classList.remove('input-error');
//         });
//       });
//     }

//     showSuccessMessage() {
//       const button = this.form.querySelector('.send-button');
//       const originalText = button.textContent;

//       button.textContent = 'Message Sent! ✓';
//       button.style.background = '#28a745';

//       setTimeout(() => {
//         button.textContent = originalText;
//         button.style.background = '';
//         this.form.reset();
//       }, 3000);
//     }
//   }

//   // ===================================
//   // 8. DROPDOWN MENU FIX
//   // ===================================

//   class DropdownMenu {
//     constructor() {
//       this.init();
//     }

//     init() {
//       const dropdowns = document.querySelectorAll('.has-dropdown');

//       dropdowns.forEach(dropdown => {
//         dropdown.addEventListener('mouseenter', () => {
//           const menu = dropdown.querySelector('.sub-navigation');
//           if (menu) {
//             menu.classList.add('show');
//           }
//         });

//         dropdown.addEventListener('mouseleave', () => {
//           const menu = dropdown.querySelector('.sub-navigation');
//           if (menu) {
//             menu.classList.remove('show');
//           }
//         });
//       });

//       const nestedDropdowns = document.querySelectorAll('.nested-dropdown');

//       nestedDropdowns.forEach(nested => {
//         nested.addEventListener('mouseenter', () => {
//           const menu = nested.querySelector('.sub-navigation');
//           if (menu) {
//             menu.classList.add('show');
//           }
//         });

//         nested.addEventListener('mouseleave', () => {
//           const menu = nested.querySelector('.sub-navigation');
//           if (menu) {
//             menu.classList.remove('show');
//           }
//         });
//       });
//     }
//   }

//   // ===================================
//   // INITIALIZE ALL
//   // ===================================

//   function init() {
//     new PageLoader();
//     new PortfolioFilter();
//     new SmoothScroll();
//     new NavbarScroll();
//     new ScrollToTop();
//     new ScrollReveal();
//     new FormValidation();
//     new DropdownMenu();
//   }

//   // Start when DOM is ready
//   if (document.readyState === 'loading') {
//     document.addEventListener('DOMContentLoaded', init);
//   } else {
//     init();
//   }

// })();