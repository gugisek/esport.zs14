
<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed">
    <section class="py-4 px-[5%] md:px-[10%] 2xl:px-[15%] bg-[#00000099] min-h-[100vh]">
        <?php include 'components/navbar.php'; ?>
       <section class="min-h-screen w-full flex flex-col items-center justify-center">
        <section class="w-full h-full flex flex-col items-center justify-center">
            <section class="flex items-center flex-col justify-center">
                <img src="public/img/logo2p2.png" alt="logo" class="md:w-1/4 w-1/2 p-6 bg-gray-100 rounded-xl">
                <span class=" font-[Lexend] py-5 text-xs theme-text">Zaloguj się, aby kontynuować</span>
                
            </section>
            <section class="items-center justify-center neo-shadow min-h-1/3 w-1/6 min-w-[250px] max-w-[500px] py-10 px-5 flex flex-col">
                
                <form action="scripts/login_script.php" method="POST" class="flex-col flex gap-4">
                    <input type="text" id="login" name="login" placeholder="Login" class="input font-[poppins]" required>
                    <input type="password" id="pswd" name="password" placeholder="Hasło" class="input font-[poppins]" required>
                    <input type="submit" value="Zaloguj się" class="hover:bg-indigo-300 theme-bg font-[poppins] hover:text-white hover:shadow-xl text-gray-200 focus:bg-indigo-500 transition-all duration-200 focus:text-white px-5 py-3 theme-shadow-hover hover:scale-105 rounded-xl text-sm cursor-pointer">
                </form>
                <?php
                    if(isset($_SESSION['error']))
                    {
                        echo '<span class="text-red-500 text-center text-xs mt-6">'.$_SESSION['error'].'</span>';
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