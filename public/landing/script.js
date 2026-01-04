document.addEventListener('DOMContentLoaded', function(){
  var cta = document.querySelector('.cta-button');
  if(cta){
    cta.addEventListener('click', function(e){
      // navigate to perangkat index
      window.location.href = '/perangkat';
    });
  }
  
  // Theme toggle: persist in localStorage and apply on load
  var themeToggle = document.getElementById('theme-toggle');
  function applyTheme(theme){
    if(theme === 'dark') document.body.classList.add('dark');
    else document.body.classList.remove('dark');
    if(themeToggle) themeToggle.textContent = theme === 'dark' ? '☀️' : '🌙';
  }
  var stored = localStorage.getItem('theme');
  if(!stored){
    stored = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) ? 'dark' : 'light';
  }
  applyTheme(stored);
  if(themeToggle){
    themeToggle.addEventListener('click', function(e){
      var next = document.body.classList.contains('dark') ? 'light' : 'dark';
      localStorage.setItem('theme', next);
      applyTheme(next);
    });
  }
  
  // User dropdown toggle (landing header)
  var userButton = document.getElementById('user-button');
  var userDropdown = document.getElementById('user-dropdown');
  if(userButton && userDropdown){
    userButton.addEventListener('click', function(e){
      e.stopPropagation();
      var open = userDropdown.style.display === 'block';
      userDropdown.style.display = open ? 'none' : 'block';
      userButton.setAttribute('aria-expanded', !open);
    });
    // close when clicking outside
    document.addEventListener('click', function(){
      if(userDropdown.style.display === 'block') userDropdown.style.display = 'none';
    });
  }
});
