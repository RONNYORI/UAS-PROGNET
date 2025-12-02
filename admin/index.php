<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tailwind Dashboard</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
  <div class="flex min-h-screen">

    <!-- TOGGLE BUTTON -->
    <button id="toggleBtn"
      class="md:hidden fixed top-6 right-6 w-14 h-14 bg-[#2e3047] rounded-full flex items-center justify-center cursor-pointer z-50 text-white text-3xl">
      <i id="toggleIcon" class="ri-menu-line"></i>
    </button>

    <!-- SIDEBAR -->
    <?php include('template/sidebar.php')?>

    <!-- CONTENT -->
    <main class="flex-1 p-8 md:pt-8 pt-24">
      <h1 class="text-4xl font-bold text-[#3C3F58] mb-2">Welcome, Human</h1>
      <p class="text-[#707793]">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, explicabo!
      </p>
    </main>

  </div>

    <script src="js/main.js"></script>
</body>
</html>
