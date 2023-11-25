
<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed">
    <section class="py-4 px-[5%] md:px-[10%] 2xl:px-[15%] bg-black/70 min-h-[100vh]">
        <?php include 'components/navbar.php'; ?>
       <section class="min-h-screen w-full flex flex-col items-center justify-center">
        <section class="h-full flex flex-row items-center justify-center">
            <section class="items-center justify-center bg-black/70 shadow-xl rounded-xl py-10 px-5 flex flex-col">
                <section class="w-ful h-full items-center justify-center flex md:flex-row flex-col gap-4">
                    <section class="flex items-center flex-col h-full justify-center">
                        <img data-aos="fade-right" data-aos-delay="100" src="public/img/logo2p2.png" alt="logo" class="md:w-3/4 w-3/4 max-w-[200px] p-6 bg-gray-100 rounded-xl">
                        <span data-aos="fade-right" data-aos-delay="200" class=" font-[Lexend] py-5 text-xs theme-text">Zaloguj się, aby kontynuować</span>
                    </section>    
                    <form action="scripts/login_script.php" method="POST" class="flex-col flex gap-4">
                        <input data-aos="fade-right" data-aos-delay="300" type="text" id="login" name="login" placeholder="Login" class="input font-[poppins]" required>
                        <input data-aos="fade-right" data-aos-delay="400" type="password" id="pswd" name="password" placeholder="Hasło" class="input font-[poppins]" required>
                        <input data-aos="fade-right" data-aos-delay="500" type="submit" value="Zaloguj się" class="hover:bg-indigo-300 theme-bg font-[poppins] hover:text-white hover:shadow-xl text-gray-200 focus:bg-indigo-500 transition-all duration-200 focus:text-white px-5 py-3 theme-shadow-hover hover:scale-105 rounded-xl text-sm cursor-pointer">
                    </form>
                </section>
                <?php
                    if(isset($_SESSION['error']))
                    {
                        echo '<span class="text-red-500 text-center text-xs mt-8">'.$_SESSION['error'].'</span>';
                    }
                    ?>
                <?php
                    if(isset($_SESSION['error']))
                    {
                        echo '<script> document.getElementById("login").classList.add("animate-pulse"); document.getElementById("pswd").classList.add("animate-pulse"); </script>';
                        unset($_SESSION['error']);
                    }
                    ?>
            </section> 
        </section>
       </section>
        
    </section>
</section>