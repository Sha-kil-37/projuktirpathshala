<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projuktirpathshala</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section>
        <div class="xl:w-5xl mx-auto">
            <h1 class="text-3xl font-bold text-center mt-10">Hello Admin!</h1>
            <p class="text-center mt-5 text-xl max-w-4xl mx-auto">
                Welcome to the admin dashboard of Projuktirpathshala! Here you can manage all aspects of the platform, including students, courses, and more. Use the navigation menu to access different sections of the dashboard and stay organized with your administrative tasks.
            </p>
            <div class="mt-10 flex justify-between border-t pt-10">
                <div>
                    <div class="flex gap-x-20">
                        <h2 class="text-2xl font-semibold">Students List</h2>
                        <button onclick="handleAddStudent" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded inline-block cursor-pointer">Add Student</button>
                    </div>
                    <div class="mt-5">
                        <table class="min-w-full bg-white border">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Name</th>
                                    <th class="py-2 px-4 border-b">Email</th>
                                    <th class="py-2 px-4 border-b">Actions</th>
                                </tr>
                            </thead>

                        </table>

                    </div>

                </div>
                <div>
                    <div class="flex gap-x-20">
                        <h2 class="text-2xl font-semibold">Student Certificates</h2>
                        <button onclick="handleAddCertificate" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded inline-block cursor-pointer">Add Certificate</button>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>