<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .card {
        background-color: white;
        border: 2px solid rgb(170, 169, 169);
        border-radius: 1rem;
        margin-top: -3rem;
      }
      .text-center{
        padding: 0rem 20%;
      }
      .text{
        padding: 0rem 10% 2% 10%;
        margin-top: 2rem;
      }
      .scm{
        padding: 0rem 10% 5% 10%;
      }
      .scm .ig{
        color: white;
        border: 2px solid #ff80b5;
        background-color: #624E88;
        border-radius: 9999px;
        padding: 0.5rem;
        font-size: 1.35rem;
      }
      .scm .ig:hover{
        color: white;
        background-color: #ff80b5;
        cursor: pointer;
        border: 2px solid #624E88;
      }
    </style>
</head>
<body>
    <div class="bg-white">
        <x-header></x-header>
        <div class="relative isolate px-6 pt-14 lg:px-8">
          <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
          <div class="mx-auto">
            <div class="text-center">
              <div style="justify-content:center; display:flex; align-item:center" class="mt-20">
                <img src="img/avataaars.png" style="width:10rem;" alt="Home-Image">
              </div>
              <div class="card">
                <h1 class="text-3xl mt-16 text-gray-900"><strong>Alfan Alfian</strong></h1>
                <h2 class="text-xl mt-1 text-gray-900">Student And Web Developer in Indonesia</h2>
                <div class="text">
                  <p>What's up. I'm Alfan. I'm a student living in Indonesia. I am a fan of design, music, games, and coffe. I'm also interested in programming and technology. My love for computers and gaming may have also influenced my interest in fields such as computer science, graphic design or software development.</p>
                </div>
                <div class="scm">
                  <a href="https://www.instagram.com/stfu.alfnn/" target="_blank" type="button"><i class="fa-brands fa-instagram ig"></i></a>
                  <a href="https://www.youtube.com/@WindahBasudara" class="ml-2" target="_blank" type="button"><i class="fa-brands fa-youtube ig"></i></a>
                 </div>
              </div>
            </div>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-40rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>
      
</body>
</html>