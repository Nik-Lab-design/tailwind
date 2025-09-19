<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rijksoverheid Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'rijk-blue': '#154273',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white border-b border-gray-300">
        <div class="container mx-auto px-4 py-3 flex justify-center items-center">
            <div class="flex items-center space-x-3">
                <img src="https://www.rijksoverheid.nl/binaries/content/gallery/rijksoverheid/channel-afbeeldingen/logos/beeldmerk-rijksoverheid-desktop.svg" alt="Rijksoverheid logo" class="h-16">
                <span class="text-xl font-bold text-rijk-blue">Rijksoverheid</span>
            </div>
        </div>
    </header>

    <nav class="bg-rijk-blue text-white">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold">Home</h1>
                <div class="hidden md:flex space-x-4 text-sm">
                    <a href="#" class="hover:underline">Actueel</a>
                    <a href="#" class="hover:underline">Onderwerpen</a>
                    <a href="#" class="hover:underline">Ministeries</a>
                    <a href="#" class="hover:underline">Regering</a>
                    <a href="#" class="hover:underline">Documenten</a>
                </div>
                <button class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-6">

        <section class="mb-10 flex justify-end">
             <div class="flex w-full max-w-md">
                 <input type="text" placeholder="Zoeken" class="px-4 py-2 border border-gray-300 rounded-l w-full focus:outline-none">
                 <button class="bg-rijk-blue text-white px-4 py-2 rounded-r">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                 </button>
             </div>
         </section>

        <section class="mb-10">
            <div class="flex justify-center">
                <div class="bg-white p-5 rounded shadow w-full max-w-md">
                    <h2 class="text-xl font-bold text-rijk-blue mb-4">Veel bekeken</h2>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-rijk-blue hover:underline flex items-center"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> Wat is de WOZ-waarde van mijn huis?</a></li>
                        <li><a href="#" class="text-rijk-blue hover:underline flex items-center"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> Overzicht schoolvakanties 2025-2026</a></li>
                        <li><a href="#" class="text-rijk-blue hover:underline flex items-center"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> Nieuwe vaccinatieronde corona</a></li>
                        <li><a href="#" class="text-rijk-blue hover:underline flex items-center"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> Bedragen minimumloon 2025</a></li>
                        <li><a href="#" class="text-rijk-blue hover:underline flex items-center"><svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> Het juiste contract: zzp ja of nee?</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-10">
            <h2 class="sr-only">Onderwerpen</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Belastingen, uitkeringen en toeslagen</h3>
                    <p class="text-sm">AOW, Bijstand, WW-uitkering, Belastingplan, Kinderopvangtoeslag...</p>
                </div>
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Bouwen en wonen</h3>
                    <p class="text-sm">Huurwoning, Huurverhoging, Koopwoning, Subsidie energie thuis...</p>
                </div>
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Economie</h3>
                    <p class="text-sm">Koopkracht, Armoedebestrijding, Ondernemen en innovatie...</p>
                </div>
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Familie, zorg en gezondheid</h3>
                    <p class="text-sm">Zorgverzekering, Scheiden of uit elkaar gaan, 18 jaar worden...</p>
                </div>
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Internationale samenwerking</h3>
                    <p class="text-sm">Oorlog in Oekraïne, Europese Unie, Mensenrechten...</p>
                </div>
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Klimaat, milieu en natuur</h3>
                    <p class="text-sm">Stikstof, Duurzame energie, Gaswinning in Groningen...</p>
                </div>
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Migratie en reizen</h3>
                    <p class="text-sm">Paspoort en identiteitskaart, Vakantie en reizen...</p>
                </div>
                <div class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-bold text-rijk-blue mb-2">Onderwijs</h3>
                    <p class="text-sm">Schoolvakanties, Hoger onderwijs, Basisonderwijs...</p>
                </div>
            </div>
        </section>

       <section class="mb-10">
    <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Direct naar</h2>
    <div class="space-y-4 max-w-2xl mx-auto">
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-lg font-bold text-rijk-blue">Paspoort en identiteitskaart</h3>
            <p class="text-sm">Aanvragen, verlengen of verlies melden.</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-lg font-bold text-rijk-blue">Zorgverzekering</h3>
            <p class="text-sm">Kies een verzekering die bij u past.</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-lg font-bold text-rijk-blue">Minimumloon</h3>
            <p class="text-sm">Bekijk de huidige bedragen.</p>
        </div>
    </div>
        </section>

        <section class="mb-10 flex justify-center">
            <div class="w-full max-w-2xl">
                <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Nieuws</h2>
                <div class="space-y-4">
                    <article>
                        <h3 class="text-lg font-bold text-rijk-blue hover:underline text-center"><a href="#">Op 1 januari 2025 nieuwe wetten in werking</a></h3>
                        <p class="text-xs text-gray-600 text-center">23-12-2024 | 17:00</p>
                    </article>
                    <article>
                        <h3 class="text-lg font-bold text-rijk-blue hover:underline text-center"><a href="#">Nieuwe regelingen en wetten per 1 januari 2025</a></h3>
                        <p class="text-xs text-gray-600 text-center">23-12-2024 | 15:05</p>
                    </article>
                    <article>
                        <h3 class="text-lg font-bold text-rijk-blue hover:underline text-center"><a href="#">Leegstandwet wordt aangepast</a></h3>
                        <p class="text-xs text-gray-600 text-center">20-12-2024 | 17:40</p>
                    </article>
                    <article>
                        <h3 class="text-lg font-bold text-rijk-blue hover:underline text-center"><a href="#">Meer mannen voor de klas: pabo krijgt extra geld</a></h3>
                        <p class="text-xs text-gray-600 text-center">20-12-2024 | 14:55</p>
                    </article>
                </div>
                <div class="mt-4 text-center">
                    <a href="#" class="text-rijk-blue hover:underline font-medium">Meer nieuws</a>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-rijk-blue text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <p class="text-lg font-bold">De Rijksoverheid. Voor Nederland</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-sm">
                    <div>
                        <h3 class="font-bold mb-3">Service</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:underline">Contact</a></li>
                            <li><a href="#" class="hover:underline">Abonneren</a></li>
                            <li><a href="#" class="hover:underline">RSS</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3">Over deze site</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:underline">Over Rijksoverheid.nl</a></li>
                            <li><a href="#" class="hover:underline">Wetten en regelingen</a></li>
                            <li><a href="#" class="hover:underline">Copyright</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold mb-3">Help</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:underline">Sitemap</a></li>
                            <li><a href="#" class="hover:underline">Privacy</a></li>
                            <li><a href="#" class="hover:underline">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>