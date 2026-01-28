document.addEventListener('DOMContentLoaded', function() {
  // Animate skill bars on scroll
  const animateSkills = () => {
    const skills = document.querySelectorAll('.skill-bar');
    skills.forEach(skill => {
      const width = skill.getAttribute('data-percent');
      skill.style.width = width;
    });
  };
  
  // Intersection Observer for scroll animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fadeIn');
      }
    });
  }, { threshold: 0.1 });
  
  document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
  });
  
  animateSkills();
  
  // Mobile menu toggle
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  
  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
});
