<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .home {
          padding: 0rem 5%;
      }

      .home .box-container {
          min-height: 90vh;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
          gap: 4rem;
      }

      .home .image {
          text-align: center;
          flex: 1 1 10rem;
      }

      .home .content {
          flex: 1 1 40rem;
          display: flex;
          justify-content: center;
          align-items: center;
      }

      .home .content h2 {
          font-size: 2.5rem;
          font-weight: 400;
      }

      .home .content h1 {
          font-size: 3rem;
          padding: 1rem 0;
          text-transform: none;
      }

      .home .content p {
          font-size: 1.7rem;
          font-weight: 400;
          padding-bottom: 2rem;
          line-height: 1.5;
      }

      .btn {
        border: 2px solid #ff80b5;
        padding: 1rem;
        border-radius: 0.5rem;
        color: white;
        background-color: #624E88;
        
      }

      .typing-text{
        color: #624E88;
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
          <div>
          <section class="home">
            <div class="box-container">
              <div class="content">
                <div class="text">
                  <h2><strong>Hi There!</strong></h2>
                  <h1><strong>I Am a <span class="typing-text"></span></strong></h1>
                  <p>Creative web developer offering 2+ years of experience providing high-impact web solutions for many different organizations.</p>
                  <a href="/about" class="btn"> About Me <i class="fa-solid fa-user ml-2"></i></a>
                </div>
              </div>
              <div class="image">
                <img src="img/avataaars.png" style="width: 20rem" alt="Home-Image">
              </div>
            </div>
          </section>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-50rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>
      
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="js/typed.js"></script>

<script>
  var typed = new Typed('.typing-text', {

      strings: ['Web Developer', 'Web Designer', 'Photographer', 'Graphic Designer', 'Lover'],
      typeSpeed: 120,
      loop: true
  });
</script>