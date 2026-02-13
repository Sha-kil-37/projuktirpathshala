<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projuktirpathshala</title>
  @vite('resources/css/app.css')
</head>
<!--  -->

<body>
  <section class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="text-center">
      <h1 class="text-4xl font-bold mb-4">Welcome to Projuktirpathshala</h1>
      <p class="text-lg text-gray-700">Your journey to learning starts here.</p>
      <a href="{{ route('admin.index') }}" class="mt-6 inline-block text-blue-500">Go to Admin Panel</a>
    </div>
  </section>
</body>

</html>