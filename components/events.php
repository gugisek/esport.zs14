<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventy / E-SPORT'owa ZS14</title>
    <link rel="stylesheet" href="public/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body style="margin: 0; padding: 0">
    <section class="w-full h-screen">
        <article class="flex flex-col space-y-20 items-center justify-between">
            <p style="color:rgba(30,30,30,0.2)" class="fixed text-[800px] m-0 p-0 tracking-widest vertical-center z-0 xd">2023</p>
            <div style="background-image: url('../public/img/green.jpg');" class="mmm w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                    <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">League of Legends</p>
                </div>
            </div>
            <div style="background-image: url('../public/img/yellow.jpg');" class="mmm w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                    <p class="py-3 px-2 w-1/3 mb-3 ml-3 border-l-8 border-yellow-500 h-1/7 bg-white vertical-center">Counter-Strike:Global Offensive</p>
                </div>
            </div>
            <div style="background-image: url('../public/img/purple.jpg');" class="mmm w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-top">
                <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                    <p class="py-2 px-2 w-1/5 mb-3 ml-3 border-l-8 border-green-500 h-1/7 bg-white">Dzień informatyka</p>
                </div>
            </div>
        </article>
        <article class="flex flex-col space-y-20 items-center justify-between">
            <p class="fixed text-[600px] m-0 p-0 tracking-widest vertical-center xd">2022</p>
            <div style="background-image: url('../public/img/green.jpg');" class="mmm w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                    <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">League of Legends</p>
                </div>
            </div>
            <div style="background-image: url('../public/img/yellow.jpg');" class="mmm w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                    <p class="py-3 px-2 w-1/3 mb-3 ml-3 border-l-8 border-yellow-500 h-1/7 bg-white vertical-center">Counter-Strike:Global Offensive</p>
                </div>
            </div>
            <div style="background-image: url('../public/img/purple.jpg');" class="mmm w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-top">
                <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                    <p class="py-2 px-2 w-1/5 mb-3 ml-3 border-l-8 border-green-500 h-1/7 bg-white">Dzień informatyka</p>
                </div>
            </div>
        </article>
    </section>
    <script>
        var articles = document.querySelectorAll('article');
        var xds = document.querySelectorAll('.xd');
        var mmms = document.querySelectorAll('.mmm');
        heihgtxd = ((mmms[0].scrollHeight+80)*(mmms.length-3))/2;
        window.addEventListener('scroll', function() {
            let scrollPosition = window.pageYOffset;
            if (scrollPosition>heihgtxd) {
                xds[0].innerHTML = '2022';
            } else {
                xds[0].innerHTML = '2023';
            }
        });
    </script>
</body>
</html>