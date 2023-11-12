<section class="flex flex-col space-y-20 pb-[2.5rem]">
    <h1 class="w-full bg-white text-center text-[4em] z-40 px-20 mb-[-200px] theme-text">HallOfFame</h1>
    <!-- Z tym trzeba coś zrobić, bo na razie wisi na marginach -->
    <p style="color:rgba(30,30,30,0.2); position:-webkit-sticky; top: -5%;" class="h-[80px] bg-white z-0 sticky w-screen grid justify-center text-[700px] m-0 p-0 xd">2023</p>
            
    <!--Component z wygranymi za dane lata w danych rozgrywkach -->
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
                        <div class="w-1/5 relative flex align-center justify-center items-center players">
                            <img src="public/img/player1.png" alt="1" class="h-[100%]">
                            <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambino</p>
                        </div>
                        <div class="w-1/5 relative flex align-center justify-center items-center players">
                            <img src="public/img/player2.png" alt="2" class="h-[100%]">
                            <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Gustawo</p>
                        </div>
                        <div class="w-1/5 relative flex align-center justify-center items-center players">
                            <img src="public/img/player3.png" alt="3" class="h-[100%]">
                            <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Korusiwo</p>
                        </div>
                        <div class="w-1/5 relative flex align-center justify-center items-center players">
                            <img src="public/img/player4.png" alt="4" class="h-[100%]">
                            <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Bambol</p>
                        </div>
                        <div class="w-1/5 relative flex align-center justify-center items-center players">
                            <img src="public/img/player5.png" alt="5" class="h-[100%]">
                            <p class="absolute bottom-0 py-1 bg-white w-[100%] text-center italic">Maciek</p>
                        </div>
                    </div>
                    <div class="w-[100%] h-[20%] players">
                        <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card w-[65vw] h-[30vh]">
            <div class="flip-card-inner">
                <div style="background-image: url('public/img/yellow.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                    <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                        <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Counter-Strike 2</p>
                    </div>
                </div>
                <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                    <div class="flex w-[100%] h-[80%] flex flex-row players">
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
                    <div class="w-[100%] h-[20%] players">
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
                    <div class="flex w-[100%] h-[80%] flex flex-row players">
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
                    <div class="w-[100%] h-[20%] players">
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
                    <div class="flex w-[100%] h-[80%] flex flex-row players">
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
                    <div class="w-[100%] h-[20%] players">
                        <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card w-[65vw] h-[30vh]">
            <div class="flip-card-inner">
                <div style="background-image: url('public/img/yellow.jpg');" class="flip-card-front w-[65vw] h-[30vh] bg-zoom cursor-pointer saturate-0 hover:saturate-100 hover:scale-105 duration-300 hover:shadow-[0px_15px_20px_#3d3d3d] aspect-[3/4] flex flex-col justify-end rounded-xl bg-center">
                    <div class="flex flex-col-reverse w-full h-full justify-items-end content-end">
                        <p class="py-3 px-2 w-1/4 mb-3 ml-3 border-l-8 border-indigo-500 h-1/7 bg-white">Counter-Strike 2</p>
                    </div>
                </div>
                <div class="flip-card-back w-[100%] h-[100%] flex flex-col rounded-xl shadow-[0px_15px_20px_#3d3d3d]">
                    <div class="flex w-[100%] h-[80%] flex flex-row players">
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
                    <div class="w-[100%] h-[20%] players">
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
                    <div class="flex w-[100%] h-[80%] flex flex-row players">
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
                    <div class="w-[100%] h-[20%] players">
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
                    <div class="flex w-[100%] h-[80%] flex flex-row players">
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
                    <div class="w-[100%] h-[20%] players">
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
                    <div class="flex w-[100%] h-[80%] flex flex-row players">
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
                    <div class="w-[100%] h-[20%] players">
                        <p class="text-center theme-bg text-white h-[100%] text-2xl rounded-b-xl grid content-center z-0">Klasa 5pi</p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    </section>
</section>

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
    
    let flipCards = document.querySelectorAll('.flip-card');
    let flipCardInners = document.querySelectorAll('.flip-card-inner');

    // let animationsBlocks = document.querySelectorAll(".players");

    flipCards.forEach((card, index) =>{
        card.addEventListener("click", ()=>{
            if(flipCardInners[index].classList.contains('flip-card-inner-rotate')){
                flipCardInners[index].classList.remove('flip-card-inner-rotate');
                // animationsBlocks.forEach((elem) =>{
                //     elem.classList.remove('slide-left-long');
                // })
            } else{
                flipCardInners.forEach((inx)=>{
                    inx.classList.remove('flip-card-inner-rotate');
                });
                flipCardInners[index].classList.add('flip-card-inner-rotate');
                // animationsBlocks.forEach((elem) =>{
                //     elem.classList.add('slide-left-long');
                // })
                // setTimeout(()=>{animationsBlocks.forEach((elem) =>{
                //     elem.classList.toggle('slide-left-long');
                // })},700);
            }
        })
    });

</script>