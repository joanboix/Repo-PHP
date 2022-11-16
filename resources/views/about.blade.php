
<?php require '../resources/views/layout/html_header.blade.php'; ?>

<?php require '../resources/views/layout/nav.blade.php'; ?>

<div class="py-10">
    <header>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">ABOUT</h1>
        </div>
    </header>
    <main>
        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                    <div class="space-y-5 sm:space-y-4">
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">El nostre equip</h2>
                        <p class="text-xl text-gray-500">Aquest projecte està fet per Joan Boix, seguint la guia dels videos de <a class="text-indigo-600" href="https://github.com/acacha">Sergi Tur.</a></p>
                    </div>
                    <div class="lg:col-span-2">
                        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                            <li>
                                <div class="flex items-center space-x-4 lg:space-x-6">
                                    <img class="h-16 w-16 rounded-full lg:h-20 lg:w-20" src="https://media.istockphoto.com/id/1083281494/es/vector/icono-de-empresario.jpg?s=612x612&w=0&k=20&c=IUWAPkzFkZGI1wyI07z7qMTHX1AIreGJb5HA_gWJ2_I=" alt="">
                                    <div class="space-y-1 text-lg font-medium leading-6">
                                        <h3>Joan Boix</h3>
                                        <p class="text-indigo-600">Estudiant d'ASIX</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>

<?php require '../resources/views/layout/footer.blade.php'; ?>

