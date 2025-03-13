<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Navbar Example</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="styles.css">
</head>
<body>


   <!-- Bootstrap Navbar -->
   <div class="">
       <nav class="navbar navbar-expand-lg navbar-light container">
           <img src="./pictures/Untitled-1.png" width="180px">


           <!-- Navbar Toggler -->
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>


           <!-- Navbar Links -->
           <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aulas.php">Aulas</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contact.php">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                </ul>
            </div>
       </nav>
   </div>


   <!-- Main Content -->
   <div class="container mt-5">


       <!-- Hero Section -->
       <div class="d-flex justify-content-center mt-5 flex-column flex-sm-row align-items-center gap-3">
           <div>
               <div class="mr-2">
                   <h1 class="display-2">Aulas de Dança Online</h1>
                   <p>Descubra o prazer de aprender dança de forma prática e conveniente, diretamente da sua casa. As nossas aulas online via Zoom são ideais para quem busca flexibilidade e um ensino personalizado. Se está a começar ou deseja aperfeiçoar seus movimentos, temos a aula certa para si.

                    Oferecemos uma experiência interativa, com acompanhamento individual e em grupo, permitindo que cada aluno aprenda no seu próprio ritmo e receba feedback constante. Se está à procura de uma atividade divertida, saudável e que melhore a sua confiança, as nossas aulas são perfeitas para si.</p>
               </div>


               <div class="d-flex gap-2">
                   <button type="button" class="btn btn-primary">
                       Marcar Aula
                   </button>
                   <button type="button" class="btn btn-light">
                       Decobrir Mais
                   </button>
               </div>
           </div>
           <img src="./pictures/a562f67b-e024-4495-8449-1c18c3f07a63.jpeg" class="col-12 col-sm-6 rounded">
       </div>


       <!-- About Me Section -->
       <section class="mt-5">
        <h2>Estilos Disponíveis</h2>
       <ul>
        <li>Dança do Ventre</li>
        <li>Dança Contemporânea
        </li>
       </ul>
        </section>


       <!-- Dance Experiences Section -->
       <section>
           <h2 class="mt-5">Por que Escolher Nossas Aulas de Dança?</h2>
           <ul>
            <li>Comodidade e Flexibilidade: Aprenda no conforto da sua casa, sem se preocupar com deslocamentos.</li>
            <li>Aulas Personalizadas: Receba atenção dedicada e adaptação ao seu ritmo e objetivos.</li>
            <li>Variedade de Estilos: Explore diferentes estilos como dança do ventre e contemporânea, para todos os gostos.</li>
            <li>Preços Acessíveis: Aulas de alta qualidade com preços justos, tanto individuais como em grupo.</li>
            <li>Aprendizado Interativo: Receba feedback instantâneo para melhorar sua técnica de forma rápida e eficaz.</li>
           </ul>

           <div>
            <h2>O Valor</h2>
            <ul>
                <li>Aula Individual (1h): 25€ - 40€
                </li>
                <li>Pacote de 5 Aulas Individuais: 100€ - 180€
                </li>
                <li>Aulas em Grupo (1h): 12€ por participante (mínimo de 3 pessoas)
                </li>
            </ul>
           </div>
           <div>
            <h2>Realize Workshops Personalizados de Dança – Transforme Seu Evento em Uma Experiência Inesquecível!</h2>

            Quer um evento especial, uma aula personalizada para seu grupo ou uma oportunidade única de se conectar através da dança? Oferecemos workshops exclusivos, onde moldamos o conteúdo de acordo com as suas necessidades e objetivos. Seja para melhorar a técnica, se divertir ou criar memórias inesquecíveis, garantimos uma experiência envolvente e personalizada. Aproveite a chance de vivenciar a dança de maneira única com um workshop feito sob medida! Agende agora e sinta a energia da danç</div>

           <div>
            <h2>Como Funciona?</h2>
                Após o agendamento, você receberá o link da aula no seu e-mail. Basta entrar na plataforma no horário marcado e desfrutar de uma aula focada nas suas necessidades.
           </div>

           <div>
           Para mais informações ou para marcar a sua aula, entre em contato connosco. Estamos aqui para ajudar você a alcançar seus objetivos na dança, seja por diversão, exercício ou preparação para apresentações!
           
           </div>
       </section>



       <!-- Gallery Section -->
       <section class="mt-5">
           <h2>Gallery</h2>
           <div class="container">
               <div class="row g-3">
                   <div class="col-12 col-md-6 gallery-item">
                       <img src="./pictures/2d802016-d710-42f2-b4cc-5c36a2f4eba2.jpeg" class="img-fluid">
                   </div>
                   <div class="col-12 col-md-6 gallery-item">
                       <img src="./pictures/37b9df79-6ac5-4786-8b5a-528bbbaf345a.jpeg" class="img-fluid">
                   </div>
                   <div class="col-12 col-md-6 gallery-item">
                       <img src="./pictures/ee7c9a7d-5162-4951-a43a-6e38efe4298a.jpeg" class="img-fluid">
                   </div>
                   <div class="col-12 col-md-6  gallery-item">
                       <img src="./pictures/6d4681cc-cb96-442f-88b3-5e657f75c60c.jpeg" class="img-fluid">
                   </div>
               </div>
           </div>
       </section>



       <!-- Booking Section -->
       <section class="mt-5">
           <h2>Let’s Create Memorable Moments Together!</h2>
           <p>At Fusion Dance by Zoia, it’s not just about the performance—it’s about creating a memorable experience that resonates with your audience and leaves them wanting more. Here’s how you can book your dance experience:</p>
           <ol>
               <li>Contact Me: Reach out via email or phone to discuss your event. Whether you’re looking for a performance or a workshop, I’ll tailor everything to meet your needs.</li>
               <li>Customizable Packages: I offer flexible pricing and packages for all events, from intimate gatherings to large festivals. Let’s discuss your budget, and I’ll create a performance that fits your vision.</li>
               <li>Book Now: Don’t miss out! Secure your spot and make your event unforgettable with a dance experience from Fusion Dance by Zoia.</li>
           </ol>
       </section>


       <!-- Contact Form Section -->
       <section class="mt-5">
           <h2>Contacts</h2>
           <form method="POST" action="./php/process.php">
               <div class="form-row">
                   <div class="form-group col-md-12">
                       <label for="FirstName">First Name:</label>
                       <input type="text" name="first-name" class="form-control" placeholder="Enter first name" required>
                   </div>
                   <div class="form-group col-md-12 mt-2">
                       <label for="LastName">Last Name:</label>
                       <input type="text" name="last-name" class="form-control" placeholder="Enter last name" required>
                   </div>
                   <div class="form-group col-md-12 mt-2">
                       <label for="inputEmail14">Email:</label>
                       <input type="email" name="email" class="form-control" id="inputEmail14" placeholder="Enter email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required />
                   </div>
                   <div class="form-group col-md-12 mt-2">
                       <label for="phone">Phone Number:</label>
                       <input type="tel" name="phone" class="form-control" id="phone"
                           pattern="^9[1236]\d{7}$|^2\d{8}$"
                           inputmode="tel"
                           placeholder="Enter phone number (e.g., 912345678)"
                           required>
                   </div>
                   </div>
                   <div class="form-group col-md-12 mb-2 mt-2">
                       <label for="message">Message / Additional Information:</label>
                       <textarea id="message" name="message" rows="4" placeholder="Feel free to share any ideas, preferences, or questions you have about the classes." class="form-control"></textarea>
                   </div>
                   <div class="form-group">
                       <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit Inquire</button>
                   </div>
               </div>
           </form>
       </section>


       <!-- Footer Section -->
      
   </div>
   <footer class="pg-info container-fluid bg-dark text-white">
       <p>©Copyright 2025 by me. All rights reversed.</p>
   </footer>
  
   <!-- Bootstrap JS -->
   
</body>
</html>