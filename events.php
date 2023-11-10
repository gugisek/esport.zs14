<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventy / E-SPORT'owa ZS14</title>
    <link rel="stylesheet" href="public/global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="theme.js"></script>
</head>
<body class="flex flex-col items-center justify-start w-screen overflow-x-hidden p-0 m-0" data-theme="green">
    <section class="w-screen flex flex-col items-center z-20 h-full">
        <?php include 'components/navbar.php'; ?>
        <?php include 'components/schedule.php'; ?>
    </section>
    <section class="w-screen">
        <!-- <h1 class="ful bg-white text-center text-[4em] z-40 px-20 theme-text">HallOfFame</h1> -->
        <div class="absolute w-full h-[50%] flex flex-col justify-center items-center">
            <div class="w-3/4 text-center z-50 text-2xl italic">Wyniki poprzednich turniejów... <br> na razie nic tu nie ma</div>
        </div>
        <section class="flex flex-col space-y-20 blur-lg">
            <p style="color:rgba(30,30,30,0.2); position:-webkit-sticky;" class="bg-white z-0 sticky w-screen h-[50vh] grid justify-center content-center text-[700px] m-0 p-0 xd font-bold">2023</p>

            <!-- Z tym trzeba coś zrobić, bo na razie wisi na marginach -->
            <!-- <p style="color:rgba(30,30,30,0.2); position:-webkit-sticky; top: 35%; height:80px" class="mt-[200px] mb-[-150px] bg-white z-0 sticky w-screen h-[30%] grid justify-center content-center text-[700px] m-0 p-0 xd">2023</p> -->
            
            <!--Component z wygranymi za dane lata w danych rozgrywkach -->
            <!-- <article class="flex flex-col space-y-20 items-center justify-between z-20">
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/purple.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">League of Legends</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/yellow.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Counter-Strike:Global Offensive</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/green.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Dzień Informatyka</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-y-20 items-center justify-between z-20">
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/purple.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">League of Legends</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/yellow.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Counter-Strike:Global Offensive</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/green.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Dzień Informatyka</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="flex flex-col space-y-20 items-center justify-between z-20">
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/yellow.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Counter-Strike:Global Offensive</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card w-[65vw] h-[30vh]">
                    <div class="flip-card-inner">
                        <div style="background-image: url('public/img/green.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                            <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                                <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Dzień Informatyka</p>
                            </div>
                        </div>
                        <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                            <div class="flex w-[100%] h-[80%] flex flex-row">
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player1.png" alt="1" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player2.png" alt="2" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player3.png" alt="3" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player4.png" alt="4" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                                </div>
                                <div class="w-1/5 relative flex align-center justify-center items-center">
                                    <img src="public/img/player5.png" alt="5" class="h-[100%]">
                                    <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                                </div>
                            </div>
                            <div class="w-[100%] h-[20%]">
                                <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article> -->
        </section>
    </section>
    <?php include 'components/footer.php'; ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        var articles = document.querySelectorAll('article');
        var xds = document.querySelectorAll('.xd');
        var section = document.querySelectorAll('section');

        screenHeight = window.innerHeight;
        sectionHeight = section[1].scrollHeight;
        pHeight = xds[0].scrollHeight
        let heightOfArticles = [0];
        let height = 0;

        for(let i = 0; i<articles.length; i++){
            height = height + articles[i].scrollHeight;
            heightOfArticles.push(height);
        }

        window.addEventListener('scroll', function(){
            let scrollPosition = window.pageYOffset;

            for(let j = 0; j<articles.length-1; j++){
                let asd = [];
                asd.push()
                if(scrollPosition > heightOfArticles[j]-heightOfArticles[j]/9+section[0].scrollHeight && scrollPosition < heightOfArticles[j+1]-heightOfArticles[j+1]/9+section[0].scrollHeight){
                    xds[0].innerHTML = 2023-j;
                }
                if(scrollPosition > heightOfArticles[1]-heightOfArticles[1]/9+section[0].scrollHeight && scrollPosition < heightOfArticles[2]-heightOfArticles[2]/9+section[0].scrollHeight){
                    xds[0].innerHTML = 2022;
                }
                if(scrollPosition > heightOfArticles[2]-heightOfArticles[2]/9+section[0].scrollHeight && scrollPosition < heightOfArticles[3]-heightOfArticles[3]/9+section[0].scrollHeight){
                    xds[0].innerHTML = 2021;
                }
            }
        });

        AOS.init();

        var theme = localStorage.getItem("theme");
        if (theme == null) {
        motyw("green");
        } else {
        motyw(theme);
        }

        let flipCards = document.querySelectorAll('.flip-card');
        let flipCardInners = document.querySelectorAll('.flip-card-inner');

        flipCards.forEach((card, index) =>{
            card.addEventListener("click", ()=>{
                if(flipCardInners[index].classList.contains('flip-card-inner-rotate')){
                    flipCardInners[index].classList.remove('flip-card-inner-rotate');
                } else{
                    flipCardInners.forEach((inx)=>{
                        inx.classList.remove('flip-card-inner-rotate');
                    });
                    flipCardInners[index].classList.add('flip-card-inner-rotate');
                }
            })
        });
    </script>
</body>
</html>