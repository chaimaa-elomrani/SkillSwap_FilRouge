<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>SkillSwap - Log In</title>
  <!-- Import fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- Import animation library -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#e11d48',
            'primary-hover': '#be123c',
            pink: '#f43f5e',
            buttonBlue: '#0ea5e9',
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            roboto: ['Roboto', 'sans-serif'],
          },
          boxShadow: {
            'custom': '0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)',
            'input': '0 2px 4px rgba(0, 0, 0, 0.05)',
            'button': '0 4px 6px -1px rgba(14, 165, 233, 0.2), 0 2px 4px -2px rgba(14, 165, 233, 0.1)',
            'button-hover': '0 10px 15px -3px rgba(14, 165, 233, 0.3), 0 4px 6px -4px rgba(14, 165, 233, 0.2)',
            'card': '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)',
          },
        }
      }
    }
  </script>
  <style>
    /* Custom styles */
    .gradient-text {
      background: linear-gradient(90deg, #0ea5e9, #f43f5e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .form-card {
      backdrop-filter: blur(10px);
      background-color: rgba(255, 255, 255, 0.95);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
      transform: translateY(0);
      transition: all 0.3s ease;
    }

    .form-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 30px -5px rgba(0, 0, 0, 0.2), 0 10px 15px -6px rgba(0, 0, 0, 0.15);
    }

    .input-field {
      transition: all 0.3s ease;
      border-color: #e5e7eb;
    }

    .input-field:focus {
      transform: translateY(-2px);
      box-shadow: 0 4px 6px -1px rgba(225, 29, 72, 0.1), 0 2px 4px -2px rgba(225, 29, 72, 0.1);
    }

    .primary-button {
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px -1px rgba(14, 165, 233, 0.2), 0 2px 4px -2px rgba(14, 165, 233, 0.1);
    }

    .primary-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(14, 165, 233, 0.3), 0 4px 6px -4px rgba(14, 165, 233, 0.2);
    }

    .primary-button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: all 0.6s ease;
    }

    .primary-button:hover::before {
      left: 100%;
    }

    .google-button {
      transition: all 0.3s ease;
    }

    .google-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
    }

    .floating-animation {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-15px);
      }
      100% {
        transform: translateY(0px);
      }
    }

    .bg-overlay {
      background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
    }

    /* Animated underline effect */
    .animated-underline {
      position: relative;
    }

    .animated-underline::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -2px;
      left: 0;
      background: linear-gradient(90deg, #0ea5e9, #f43f5e);
      transition: width 0.3s ease;
    }

    .animated-underline:hover::after {
      width: 100%;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeIn 0.8s ease forwards;
    }

    .fade-in-delay-1 {
      animation: fadeIn 0.8s ease 0.2s forwards;
      opacity: 0;
    }

    .fade-in-delay-2 {
      animation: fadeIn 0.8s ease 0.4s forwards;
      opacity: 0;
    }
  </style>
</head>

<body class="bg-[url('../images/Group2072.png')] bg-cover bg-center bg-no-repeat h-screen font-sans overflow-x-hidden">
  <div class="absolute inset-0 bg-overlay"></div>

  <!-- Decorative elements -->
  <div class="absolute top-10 left-10 w-20 h-20 rounded-full bg-pink opacity-10 blur-xl"></div>
  <div class="absolute bottom-10 right-10 w-32 h-32 rounded-full bg-buttonBlue opacity-10 blur-xl"></div>

  <main class="flex flex-col md:flex-row items-center h-full gap-8 md:gap-[10%] justify-center text-white relative z-20 px-6 md:px-10 py-8">
    <!-- Left side content -->
    <div class="text-5xl md:text-6xl text-white font-bold md:w-[40%] text-center md:text-left fade-in">
      <div class="relative">

        <h1 class="leading-tight">Sign in and Elevate your Skills with <span class="gradient-text font-roboto">SkillSwap</span></h1>
        <p class="text-lg md:text-xl font-normal mt-6 opacity-80">Welcome back! Continue your journey of skill exchange and growth.</p>
        
        <!-- Trust indicators -->
        <div class="mt-8 flex flex-col md:flex-row items-center gap-4 text-base font-normal">
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-buttonBlue" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>10,000+ Active Users</span>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-buttonBlue" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>Secure & Private</span>
          </div>
          <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-buttonBlue" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span>Free to Join</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Login form card -->
    <div class="form-card rounded-3xl w-full max-w-[500px] py-8 fade-in-delay-1">
      <div class="mb-8 mt-2">
     
        <h2 class="text-black font-bold text-center text-2xl font-roboto">Welcome Back</h2>
        <p class="text-gray-600 text-center text-sm mt-2">Continue exploring services and connecting with experts</p>
      </div>

      <form class="flex flex-col gap-5 fade-in-delay-2" method="POST" action="{{ route('login') }}">
      @csrf
        <div class="px-8 md:px-12">
          <label for="email" class="text-gray-700 text-sm font-medium block mb-2">Email Address</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <input id="email" name="email" class="input-field w-full py-3 pl-10 pr-4 text-black border-2 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent shadow-input" type="email" name="email" placeholder="Enter your email" required>
          </div>
        </div>

        <div class="px-8 md:px-12">
          <div class="flex justify-between items-center mb-2">
            <label for="password" class="text-gray-700 text-sm font-medium">Password</label>
            <a href="#" class="text-pink text-sm hover:text-primary transition-colors duration-300 animated-underline">Forgot password?</a>
          </div>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <input id="password" name="password" class="input-field w-full text-black py-3 pl-10 pr-10 border-2 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent shadow-input" type="password" name="password" placeholder="Enter your password" required minlength="8">
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
              <button type="button" id="togglePassword" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <div class="px-8 md:px-12 mt-4">
          <button type="submit" class="primary-button bg-buttonBlue hover:bg-pink transition-all duration-300 px-6 py-3 w-full text-white font-medium rounded-xl">
            Log In
          </button>
        </div>

        <div class="flex items-center justify-center gap-4 px-8 md:px-12 my-2">
          <div class="h-px bg-gray-300 flex-grow"></div>
          <p class="text-gray-500 text-sm">Or continue with</p>
          <div class="h-px bg-gray-300 flex-grow"></div>
        </div>

      

        <div class="text-center mt-4">
          <p class="text-gray-600">
            Don't have an account? 
            <a href="{{ route('register') }}" class="text-pink font-medium hover:text-primary transition-colors duration-300 animated-underline">Sign up</a>
          </p>
        </div>

        <p class="text-gray-500 text-center text-xs px-8 md:px-12 mt-2 mb-4">
          By continuing, you agree to SkillSwap's <a href="#" class="text-gray-700 hover:text-black transition-colors duration-300 animated-underline">Terms of Service</a> and acknowledge you've read our <a href="#" class="text-gray-700 hover:text-black transition-colors duration-300 animated-underline">Privacy Policy</a>
        </p>
      </form>
    </div>
  </main>

 

  <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordInput = document.getElementById('password');
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      
      // Change the eye icon
      const eyeIcon = this.querySelector('svg');
      if (type === 'text') {
        eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
        `;
      } else {
        eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
      }
    });

    // Form input animation
    const inputs = document.querySelectorAll('.input-field');
    inputs.forEach(input => {
      input.addEventListener('focus', () => {
        input.parentElement.classList.add('scale-105');
        input.classList.add('shadow-lg');
      });
      
      input.addEventListener('blur', () => {
        input.parentElement.classList.remove('scale-105');
        input.classList.remove('shadow-lg');
      });
    });
  </script>
</body>

</html>