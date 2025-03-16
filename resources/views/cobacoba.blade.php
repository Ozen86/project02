<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountain Background</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        'mountains': "url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070')"
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-mountains bg-cover bg-center bg-no-repeat h-screen flex items-center justify-center">
    <div class="text-center p-8 bg-black/30 rounded-lg backdrop-blur-sm max-w-2xl">
        <h1 class="text-4xl text-white font-bold">Mountain Adventure</h1>
        <p class="text-xl text-white mt-4">Explore the majestic peaks and breathtaking views.</p>
        <button class="mt-6 px-6 py-2 bg-white text-blue-900 font-semibold rounded-lg hover:bg-blue-100 transition-colors">Explore More</button>
    </div>
</body>
</html>