<section id="bg" style="background-image: url('public/img/green.jpg');" class="bg-cover bg-fixed w-full">
    <section class="bg-[#000000c0] min-h-[100vh] w-full px-[10%] 2xl:px-[15%] pb-12 pt-16 flex grid justify-center items-center align-center">
        <h1 class="text-center text-white text-6xl leading-[1.27]">
            <?php
                $blank_page_text = "SELECT events.value FROM events WHERE event_type_id = 1 and input = 'header'";
                $result_blank_page_text = mysqli_fetch_array(mysqli_query($conn,$blank_page_text));
                echo $result_blank_page_text[0];
            ?>
        </h1>
    </section>
</section>