document.addEventListener('DOMContentLoaded', function(){
  // Keep original local dummy handlers for progressive enhancement,
  // but forms will POST to server by default.

  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
      // allow server-side handling; JS can show a loading state if desired
      // e.g. disable the button
      const btn = loginForm.querySelector('button[type="submit"]');
      if(btn) btn.disabled = true;
    });
  }

  const registerForm = document.getElementById("registerForm");
  if (registerForm) {
    registerForm.addEventListener("submit", function (e) {
      const btn = registerForm.querySelector('button[type="submit"]');
      if(btn) btn.disabled = true;
    });
  }
});
